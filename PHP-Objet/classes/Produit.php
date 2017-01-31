<?php
/**
 * Created by PhpStorm.
 * User: PREPAVENIR4
 * Date: 31/01/2017
 * Time: 15:34
 */

namespace Prepavenir\Entity;


class Produit
{
    protected $marque;
    protected $modele;

    /** @var Categorie */
    protected $categorie;

    /** @var Prix */
    protected $prix;

    /** @var Avis[] */
    protected $avis;

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function getAvis()
    {
        return $this->avis;
    }

    public function addAvis($avis)
    {
        $this->avis[] = $avis;
        return $this;
    }


}