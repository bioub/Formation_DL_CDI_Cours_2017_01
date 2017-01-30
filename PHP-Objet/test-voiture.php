<?php
// 1 - Exemple sans objet (programmation itérative)
$marqueVoiture1 = 'Renault';
$modeleVoiture1 = 'Clio';

$marqueVoiture2 = 'Peugeot';
$modeleVoiture2 = '208';

function getInfosVoiture($marque, $modele) {
    return "Ceci est une voiture $marque $modele";
}

echo getInfosVoiture($marqueVoiture1, $modeleVoiture1);
echo '<br>';
echo getInfosVoiture($marqueVoiture2, $modeleVoiture2);
echo '<br>';

// 2 - Exemple avec un tableau associatif
$voiture1 = [];
$voiture1['marque'] = 'Citroen';
$voiture1['modele'] = 'C3';

function getInfosVoitureAssoc($voiture) {
    return "Ceci est une voiture $voiture[marque] $voiture[modele]";
}

echo getInfosVoitureAssoc($voiture1);
echo '<br>';

// 3 - Exemple avec une classe
require_once 'classes/Voiture.php';

// Un objet : l'instance d'une classe, c'est à dire la représentation
// en mémoire de la classe
// La classe est un concept qui peut être instancié plusieurs fois
// avec des caractéristiques (marque, modèle...) et des comportementss
// communs (getInfos...)
$voiture1 = new Voiture();
$voiture1->marque = 'Mercedes';
$voiture1->modele = 'Classe A';
echo $voiture1->getInfos();
echo '<br>';