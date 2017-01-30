<?php
/**
 * Created by PhpStorm.
 * User: PREPAVENIR4
 * Date: 30/01/2017
 * Time: 16:32
 */

namespace Prepavenir\Exercice;


class CompteBancaire
{
    protected $numero;
    protected $proprietaire;
    protected $solde;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     * @return CompteBancaire
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param mixed $proprietaire
     * @return CompteBancaire
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    public function crediter($montant)
    {
        $this->solde = $this->solde + $montant;
    }

    public function debiter($montant)
    {
        $this->solde = $this->solde - $montant;
    }
}