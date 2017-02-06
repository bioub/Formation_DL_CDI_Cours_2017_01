<?php

namespace Prepavenir\Entity;


class Film
{
    protected $titre;
    protected $annee;

    /** @var Realisateur */
    protected $realisateur;

    /** @var Acteur[] */
    protected $acteurs = [];

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     * @return Film
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
        return $this;
    }

    /**
     * @return Realisateur
     */
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * @param Realisateur $realisateur
     * @return Film
     */
    public function setRealisateur(Realisateur $realisateur)
    {
        $this->realisateur = $realisateur;
        return $this;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs()
    {
        return $this->acteurs;
    }

    /**
     * @param Acteur $acteur
     * @return Film
     */
    public function addActeur($acteur)
    {
        $this->acteurs[] = $acteur;
        return $this;
    }


}