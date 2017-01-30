<?php

class Voiture
{
    // Propriétés :
    // Variables de la classe (on peut aussi dire
    // attributs ou champs)
    public $marque;
    public $modele;

    // Méthodes :
    // Fonctions de la classe
    public function getInfos() {
        return "Ceci est une voiture $this->marque $this->modele";
    }
}

