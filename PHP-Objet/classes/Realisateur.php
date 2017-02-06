<?php
/**
 * Created by PhpStorm.
 * User: PREPAVENIR4
 * Date: 03/02/2017
 * Time: 09:14
 */

namespace Prepavenir\Entity;


class Realisateur
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
     * @return Realisateur
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
     * @return Realisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    
    
}