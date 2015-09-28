<?php

namespace Nabli\InsightProviderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NabliInsightProviderBundle:Default:index.html.twig', array('name' => $name));
    }
}
