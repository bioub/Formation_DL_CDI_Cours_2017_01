<?php
require_once 'classes/Contact.php';
require_once 'classes/Societe.php';

$steve = new \Prepavenir\Entity\Contact();
$steve->setPrenom('Steve');
$steve->setNom('Jobs');

$apple = new \Prepavenir\Entity\Societe();
$apple->setNom('Apple');
$apple->setVille('Cupertino');

$steve->setSociete($apple); // Association entre Contact et Societe

echo $steve->getPrenom() . '<br>'; // Steve
echo $steve->getNom() . '<br>'; // Jobs
echo $steve->getSociete()->getNom() . '<br>'; // Apple