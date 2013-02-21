<?php

namespace Petrae\FichierPlanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PetraeFichierPlanteBundle:Default:index.html.twig', array('name' => $name));
    }
}
