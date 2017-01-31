<?php

namespace Prepavenir\Entity;

class Voiture
{
    // Propriétés :
    // Variables de la classe (on peut aussi dire
    // attributs ou champs)
    protected $marque;
    protected $modele;

    /** @var Contact */
    protected $proprietaire;

    // Méthodes :
    // Fonctions de la classe
    public function getInfos() {
        return "Ceci est une voiture $this->marque $this->modele";
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     * @return Voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     * @return Voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param Contact $proprietaire
     * @return Voiture
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }



}

