<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/liste-des-contacts.html")
     */
    public function listAction()
    {
        echo '<h2>Liste des contacts</h2>';
        exit();
    }
}