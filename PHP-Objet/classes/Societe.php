<?php

namespace Prepavenir\Entity;


class Societe
{
    protected $nom;
    protected $ville;

    /** @var Contact[] */
    protected $contacts = [];

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    public function addContact($contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

}