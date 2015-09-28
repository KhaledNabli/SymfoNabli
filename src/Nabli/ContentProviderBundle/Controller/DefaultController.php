<?php

namespace Nabli\ContentProviderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NabliContentProviderBundle:Default:index.html.twig', array('name' => $name));
    }
}
