<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/societes")
 */
class SocieteController extends Controller
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Societe');

        $societes = $repo->findAll();

        return $this->render('AppBundle:Societe:list.html.twig', array(
            'societes' => $societes
        ));
    }

    /**
     * @Route("/{id}", requirements={"id": "[1-9][0-9]*"})
     */
    public function showAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Societe');
        $societe = $repo->find($id);

        return $this->render('AppBundle:Societe:show.html.twig', array(
            'societe' => $societe
        ));
    }

    /**
     * @Route("/ajouter")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Societe:add.html.twig', array(

        ));
    }

}
