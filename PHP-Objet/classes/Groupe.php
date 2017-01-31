<?php
namespace Prepavenir\Entity;

class Groupe
{
    protected $nom;
    protected $description;

    /** @var Contact[] */
    protected $contacts;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Groupe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Groupe
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Contact[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }



    /**
     * @param mixed $contacts
     * @return Groupe
     */
    public function addContact($contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }


}