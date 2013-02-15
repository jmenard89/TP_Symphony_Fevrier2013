<?php

namespace GestionDeProjet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionDeProjetAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
