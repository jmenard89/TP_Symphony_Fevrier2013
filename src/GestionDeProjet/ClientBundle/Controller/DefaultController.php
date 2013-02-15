<?php

namespace GestionDeProjet\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function connexionAction()
    {
        // On récupère la requête
         $request = $this->get('request');
 
        // On récupère nos paramètres [login et mdp]
        $login = $request->request->get('form_login');
        $mdp = $request->request->get('form_mdp');
        
        // On regarde qu'el est l'id de la personne connecté
        //$sql = $this->getDoctrine()->getRepository($persistentObjectName)
        // Maintenant que nous avons l'id on l'insert dans une session
       
        return $this->render('GestionDeProjetClientBundle:Default:connexion.html.twig',array("login"=>$login));
    }
    
          
}
