<?php
/**
 * Created by PhpStorm.
 * User: PREPAVENIR4
 * Date: 03/02/2017
 * Time: 09:15
 */

namespace Prepavenir\Entity;


class Cinema
{
    protected $nom;
    protected $ville;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Cinema
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     * @return Cinema
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }
    
    
}