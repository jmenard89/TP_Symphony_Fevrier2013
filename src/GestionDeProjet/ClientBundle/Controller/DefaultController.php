<?php

namespace GestionDeProjet\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionDeProjetClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
