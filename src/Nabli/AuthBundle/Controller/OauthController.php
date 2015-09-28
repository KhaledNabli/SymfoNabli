<?php

namespace Nabli\AuthBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use HWI\Bundle\OAuthBundle\Controller\ConnectController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OAuthController extends ConnectController 
{
	public function connectAction(Request $request) 
	{
		$logger = $this->container->get('logger');
		$logger->info('Entering connectAction');
		return parent::connectAction($request);
	}


	public function registrationAction(Request $request, $key) 
	{
		$logger = $this->container->get('logger');
		$logger->info('Entering connectAction - with key:' . $key);
		return parent::registrationAction($request, $key);
	}


	public function connectServiceAction(Request $request, $service) 
	{
		$logger = $this->container->get('logger');
		$logger->info('Entering connectServiceAction - with service: ' . $service);
		return parent::connectServiceAction($request, $service);
	}

	public function redirectToServiceAction(Request $request, $service)
    {
    	$logger = $this->container->get('logger');
		$logger->info('Entering redirectToServiceAction - with service: ' . $service);

		$authorizationUrl = $this->container->get('hwi_oauth.security.oauth_utils')->getAuthorizationUrl($request, $service);
		
		$logger->info('AuthorizationUrl: ' . $authorizationUrl);
		//return parent::redirectToServiceAction($request, $service);

        // Check for a return path and store it before redirect
        if ($request->hasSession()) {
            // initialize the session for preventing SessionUnavailableException
            $session = $request->getSession();
            $session->start();

            $providerKey = $this->container->getParameter('hwi_oauth.firewall_name');
            $sessionKey = '_security.' . $providerKey . '.target_path';
            $logger->info('SessionKey: ' . $sessionKey);

            $param = $this->container->getParameter('hwi_oauth.target_path_parameter');
            $logger->info('Param hwi_oauth.target_path_parameter: ' . $param); 

            if (!empty($param) && $targetUrl = $request->get($param, null, true)) {
            	$logger->info('Session targetUrl Set: ' . $targetUrl); 
                $session->set($sessionKey, $targetUrl);
            }

            if ($this->container->getParameter('hwi_oauth.use_referer') && !$session->has($sessionKey) && ($targetUrl = $request->headers->get('Referer')) && $targetUrl !== $authorizationUrl) {
                $logger->info('Session targetUrl Set: ' . $targetUrl); 
                $session->set($sessionKey, $targetUrl);
            }
        }

        return new RedirectResponse($authorizationUrl);
    }

}