<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactType;
use AppBundle\Repository\ContactRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/contacts")
 */
class ContactController extends Controller
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Contact');

        $contacts = $repo->findAll();

        return $this->render('AppBundle:Contact:list.html.twig', array(
            'contacts' => $contacts
        ));
    }

    /**
     * @Route("/{id}", requirements={"id": "[1-9][0-9]*"})
     */
    public function showAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Contact');
        $entity = $repo->find($id);

        return $this->render('AppBundle:Contact:show.html.twig', array(
            'contact' => $entity
        ));
    }

    /**
     * @Route("/ajouter")
     */
    public function addAction(Request $request)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $contact = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();

            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('app_contact_show', [
                'id' => $contact->getId()
            ]);
        }

        return $this->render('AppBundle:Contact:add.html.twig', array(
            'contactForm' => $form->createView()
        ));
    }

}
