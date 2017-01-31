<?php

namespace Prepavenir\Entity;

class Contact
{
    // Principe d'encapsulation :
    // On encapsule (on masque) au maximum le contenu
    // d'un objet, moins on en sait sur le fonctionnement
    // interne, plus l'objet est un simple à utiliser
    protected $prenom;
    protected $nom;

    // Le commentaire du dessous aide PHPStorm à comprendre que la propriété
    // est de type Societe
    /** @var Societe */
    protected $societe;

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getSociete()
    {
        return $this->societe;
    }

    public function setSociete($societe)
    {
        $this->societe = $societe;
        return $this;
    }


}