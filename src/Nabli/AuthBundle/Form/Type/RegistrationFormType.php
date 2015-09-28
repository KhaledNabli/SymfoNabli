<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nabli\AuthBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('username', null, array('label' => 'registration.username', 'translation_domain' => 'NabliAuthBundle'))
            ->add('firstName', 'text', array('label' => 'registration.firstname', 'translation_domain' => 'NabliAuthBundle'))//,  'attr' => array('input_group' => array( 'prepend' => '.icon-user', 'append' => '.icon-asterisk'))))
            ->add('lastName', 'text', array('label' => 'registration.lastname', 'translation_domain' => 'NabliAuthBundle'))//,  'attr' => array('input_group' => array( 'prepend' => '.icon-user', 'append' => '.icon-asterisk'))))
            ->add('email', 'email', array('label' => 'registration.email', 'translation_domain' => 'NabliAuthBundle'))//,     'attr' => array('input_group' => array( 'prepend' => '@', 'append' => '.icon-asterisk'))))
            ->add('plainPassword', 'password', array('label' => 'registration.password', 'translation_domain' => 'NabliAuthBundle'))//,     'attr' => array('input_group' => array( 'prepend' => '.icon-eye-close', 'append' => '.icon-asterisk'))))
            //->add('plainPassword', 'repeated', array(
            //    'type' => 'password',
            //    'options' => array('translation_domain' => 'NabliAuthBundle'),
            //    'first_options' => array('label' => 'registration.password', 'attr' => array('input_group' => array( 'prepend' => '.icon-eye-close', 'append' => '.icon-asterisk', 'size' => 'large' ))),
            //    'second_options' => array('label' => 'registration.password_confirmation', 'attr' => array('input_group' => array( 'prepend' => '.icon-eye-close', 'append' => '.icon-asterisk', 'size' => 'large' ))),
            //    'invalid_message' => 'registration.password.mismatch',
            //))
            //->add('save', 'submit', array('label' => 'registration.submit', 'translation_domain' => 'NabliAuthBundle'))
            //->add('cancel', 'submit', array('label' => 'registration.cancel', 'translation_domain' => 'FOSUserBundle'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => "Nabli\AuthBundle\Entity\User",
            'intention'  => 'registration',
        ));
    }

    //public function getParent()
    //{
        
    //    return 'fos_user_registration';
    //}

    public function getName()
    {
        return 'nabli_user_registration';
    }
}
