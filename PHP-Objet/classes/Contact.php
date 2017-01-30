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

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

}