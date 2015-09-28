<?php

namespace Nabli\ChannelConnectorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NabliChannelConnectorBundle:Default:index.html.twig', array());
    }
}
