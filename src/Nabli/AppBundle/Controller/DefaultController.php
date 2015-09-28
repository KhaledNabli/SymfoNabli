<?php

namespace Nabli\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NabliAppBundle:Default:index.html.twig', array('name' => "Khaled"));
    }
}
