<?php
/**
 * Created by PhpStorm.
 * User: PREPAVENIR4
 * Date: 31/01/2017
 * Time: 15:39
 */

namespace Prepavenir\Entity;


class Prix
{
    protected $montant;
    protected $devise;

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
        return $this;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    public function setDevise($devise)
    {
        $this->devise = $devise;
        return $this;
    }
}