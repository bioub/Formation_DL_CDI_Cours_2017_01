<?php
/**
 * Created by PhpStorm.
 * User: PREPAVENIR4
 * Date: 31/01/2017
 * Time: 15:34
 */

namespace Prepavenir\Entity;


class Categorie
{
    protected $nom;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
}