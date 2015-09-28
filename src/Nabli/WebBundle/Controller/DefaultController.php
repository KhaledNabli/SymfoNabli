<?php

namespace Nabli\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NabliWebBundle:Default:index.html.twig', array('name' => 'Khaled'));
    }
}
