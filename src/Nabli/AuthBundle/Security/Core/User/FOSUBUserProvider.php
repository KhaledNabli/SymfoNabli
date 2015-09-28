<?php
namespace Nabli\AuthBundle\Security\Core\User;

use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\User\UserInterface;

class FOSUBUserProvider extends BaseClass
{


    protected $logger;

    public function setLogger($logger) {
        $this->logger = $logger;
    }

    /**
     * this method is to connect existing user with provider data
     * {@inheritDoc}
     */
    public function connect(UserInterface $user, UserResponseInterface $response)
    {

        $property = $this->getProperty($response);
        $username = $response->getUsername();

        //on connect - get the access token and the user ID
        $service = $response->getResourceOwner()->getName();

        $setter = 'set'.ucfirst($service);
        $setter_id = $setter.'Id';
        $setter_token = $setter.'AccessToken';

        //we "disconnect" previously connected users
        if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
            $previousUser->$setter_id(null);
            $previousUser->$setter_token(null);
            $this->userManager->updateUser($previousUser);
        }

        //we connect current user
        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());
        $user->setLastName($response->getNickname());
        $user->setFirstName($response->getRealName());
        $user->setPicture($response->getProfilePicture());

        $this->userManager->updateUser($user);
    }

    /**
     * this method is to register new users in the database.
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {

        //$backTrace = json_encode(debug_backtrace());
        $responseData = json_encode($response->getResponse());
        $this->logger->info('Calling loadUserByOAuthUserResponse from \n'. $responseData );

        $service = $response->getResourceOwner()->getName();
        $username = $response->getUsername();
        $user = $this->userManager->findUserBy(array($this->getProperty($response) => $username));


        //when the user is registrating
        if (null === $user) {
            $setter = 'set'.ucfirst($service);
            $setter_id = $setter.'Id';
            $setter_token = $setter.'AccessToken';
            $setter_data = $setter.'RawData';
            // create new user here
            $user = $this->userManager->createUser();
            $user->$setter_id($username);
            $user->$setter_token($response->getAccessToken());
            $user->$setter_data($responseData);
 
            $user->setUsername($response->getNickname());
            $user->setPlainPassword('Welcome1!');

            if(strlen($response->getEmail()) >= 5) {
                $user->setEmail($response->getEmail());
            } else {
                $user->setEmail($username .'@'. $service . '.com');
            }

            $user->setFirstName($response->getFirstName());
            $user->setLastName($response->getLastName());
            $user->setPicture($response->getProfilePicture());
            
            $this->userManager->updateCanonicalFields($user);
            $this->userManager->updatePassword($user);

            $user->setEnabled(true);
            $this->logger->info('Persisting new User ' . $user->serialize());
            $this->userManager->updateUser($user);
            return $user;
        }

        $this->logger->info('OAuth User ' . $username . ' already exists -  go with the HWIOAuth way');
        //if user exists - go with the HWIOAuth way
        $user = parent::loadUserByOAuthUserResponse($response);

        $serviceName = $response->getResourceOwner()->getName();
        $setter = 'set' . ucfirst($serviceName) . 'AccessToken';

        //update access token
        $user->$setter($response->getAccessToken());

        return $user;
    }

}