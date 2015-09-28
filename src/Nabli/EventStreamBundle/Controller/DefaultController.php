<?php

namespace Nabli\EventStreamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NabliEventStreamBundle:Default:index.html.twig', array('name' => $name));
    }
}
