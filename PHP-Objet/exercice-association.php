<?php

// 1 - Créer un Contact
// Créer un compte bancaire
// faire du Contact le propriétaire du compte bancaire

require_once 'classes/CompteBancaire.php';
require_once 'classes/Contact.php';

$romain = new \Prepavenir\Entity\Contact();
$romain->setPrenom('Romain');
$romain->setNom('Bohdanowicz');

$bnp = new \Prepavenir\Exercice\CompteBancaire();
$bnp->setNumero('09993252852');
$bnp->setProprietaire($romain);

echo $bnp->getNumero() . '<br>';
echo $bnp->getProprietaire()->getPrenom() . '<br>';

// 2 - Adapter la classe voiture en encapsulant les propriétés
// (les rendres protected) et en créant les getters/setters

// 3 - Faire le lien entre Contact et Voiture côté Voiture
// (relation propriétaire) et faire un petit exemple

require_once 'classes/Voiture.php';

$clio = new \Prepavenir\Entity\Voiture();
$clio->setMarque('Renault');
$clio->setModele('Clio');
$clio->setProprietaire($romain);

echo $clio->getMarque() . '<br>';
echo $clio->getModele() . '<br>';
echo $clio->getProprietaire()->getPrenom() . '<br>';


// 4 - Créer la classe Groupe (groupe de Contact)
// avec les propriétés nom et description
// et lier les Groupes aux contacts côté Groupe et faire
// un petit exemple

require_once 'classes/Groupe.php';

$amis = new \Prepavenir\Entity\Groupe();
$amis->setNom('Amis');
$amis->setDescription('Liste de mes amis');

$amis->addContact($romain);

$eric = new \Prepavenir\Entity\Contact();
$eric->setPrenom('Eric');
$eric->setNom('Dupont');

$amis->addContact($eric);

echo $amis->getNom() . '<br>';
echo $amis->getDescription() . '<br>';

foreach ($amis->getContacts() as $contact) {
    echo $contact->getPrenom() . '<br>';
}