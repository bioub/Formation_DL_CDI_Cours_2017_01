<?php

require_once 'vendor/autoload.php';

$film = new \Prepavenir\Entity\Film();
$film->setTitre('RAID Dingue');
$film->setAnnee(2017);

$realisateur = new \Prepavenir\Entity\Realisateur();
$realisateur->setPrenom('Dany')->setNom('Boon');

$acteur1 = new \Prepavenir\Entity\Acteur();
$acteur1->setPrenom('Dany')->setNom('Boon');

$acteur2 = new \Prepavenir\Entity\Acteur();
$acteur2->setPrenom('Alice')->setNom('Pol');

$film->setRealisateur($realisateur);
$film->addActeur($acteur1)->addActeur($acteur2);

/// Vue (fichier Twig de Symfony)

echo 'Titre : ' . $film->getTitre() . '<br>';
echo 'Année : ' . $film->getAnnee() . '<br>';
echo 'Réalisateur : ' . $film->getRealisateur()->getPrenom() . ' ' .
    $film->getRealisateur()->getNom() . '<br>';

echo 'Acteurs : ';

foreach ($film->getActeurs() as $acteur) {
    echo $acteur->getPrenom() . ' ' .
        $acteur->getNom() . ', ';
}