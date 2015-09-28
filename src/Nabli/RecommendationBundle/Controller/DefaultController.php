<?php

namespace Nabli\RecommendationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NabliRecommendationBundle:Default:index.html.twig', array('name' => $name));
    }
}
