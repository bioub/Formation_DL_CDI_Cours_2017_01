<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SocieteController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Societe:list.html.twig', array(
            'heure' => date('H:i:s'),
            'contact' => ['prenom' => 'Romain', 'nom' => 'Bohdanowicz']
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Societe:add.html.twig', array(
            // ...
        ));
    }

}
