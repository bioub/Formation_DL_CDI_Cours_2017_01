<?php
// 1 - Créer les classes qui correspondent au code suivant
require_once 'classes/Produit.php';
require_once 'classes/Categorie.php';

$ordinateur = new \Prepavenir\Entity\Categorie();
$ordinateur->setNom('Ordinateur');

$macbook = new \Prepavenir\Entity\Produit();
$macbook->setMarque('Apple');
$macbook->setModele('MacBook');

$macbook->setCategorie($ordinateur);

echo 'Produit : ' . $macbook->getMarque(). ' ';
echo $macbook->getModele() . '<br>';

echo 'Categorie : ' . $macbook->getCategorie()->getNom(). '<br>';

// 2 - Créer une classe Prix avec comme propriétés :
// montant et devise
// Modifier la classe Produit pour pouvoir ajouter un prix.
// et écrire le code qui réalise l'association
// et qui affiche le prix ci-dessous

require_once 'classes/Prix.php';

$prix = new \Prepavenir\Entity\Prix();
$prix->setMontant(1400);
$prix->setDevise('Euros');

$macbook->setPrix($prix);

echo 'Prix : ' . $macbook->getPrix()->getMontant(). ' ';
echo $macbook->getPrix()->getDevise(). '<br>';

// Facultatif 3 - Créer une classe Avis
// avec comme propriétés auteur + message
// et modifier la classe Produit pour qu'elle puisse recevoir des avis
// Puis écrire le code qui réalise l'association
// et qui affiche les avis ci-dessous

require_once 'classes/Avis.php';

$avis1 = new \Prepavenir\Entity\Avis();
$avis1->setAuteur('Romain')
      ->setMessage('Super produit !');

$avis2 = new \Prepavenir\Entity\Avis();
$avis2->setAuteur('Jean')
    ->setMessage('Woooaaahhhh !');

$macbook->addAvis($avis1);
$macbook->addAvis($avis2);

foreach ($macbook->getAvis() as $avis) {
    echo $avis->getMessage() . ' par ' . $avis->getAuteur() . '<br>';
}

