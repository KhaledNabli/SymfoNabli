<?php

namespace Nabli\EspManBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NabliEspManBundle:Default:index.html.twig', array('name' => 'n'));
    }
}
