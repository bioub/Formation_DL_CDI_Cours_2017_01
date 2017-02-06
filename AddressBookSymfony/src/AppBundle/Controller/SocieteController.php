<?php

namespace AppBundle\Controller;

use AppBundle\Form\SocieteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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
    public function addAction(Request $request)
    {
        $form = $this->createForm(SocieteType::class);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $societe = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();

            $em->persist($societe);
            $em->flush();

            return $this->redirectToRoute('app_societe_show', [
                'id' => $societe->getId()
            ]);
        }

        return $this->render('AppBundle:Societe:add.html.twig', array(
            'societeForm' => $form->createView()
        ));
    }

}
