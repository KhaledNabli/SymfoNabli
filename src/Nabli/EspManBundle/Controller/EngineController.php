<?php

namespace Nabli\EspManBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nabli\EspManBundle\Form\ESPEngineType;
use Nabli\EspManBundle\Entity\ESPEngine;


class EngineController extends Controller
{
    public function indexAction()
    {
    	$engine = new ESPEngine();
    	$form = $this->createForm(new ESPEngineType(), null);
        return $this->render('NabliEspManBundle:Engine:index.html.twig', array('form' => $form->createView()));
    }
}
