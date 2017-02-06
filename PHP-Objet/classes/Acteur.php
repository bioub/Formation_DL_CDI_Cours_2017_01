<?php

namespace Prepavenir\Entity;


class Acteur
{
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
     * @return Acteur
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
     * @return Acteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }


}