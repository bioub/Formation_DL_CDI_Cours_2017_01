<?php
require_once 'classes/Contact.php';

$prenom1Str = 'Jean';
$prenom2Str = $prenom1Str;
$prenom2Str = 'Eric';

echo $prenom1Str; // Jean
echo '<br>';


$contact1Obj = new \Prepavenir\Entity\Contact();
$contact1Obj->setPrenom('Jean');
$contact2Obj = $contact1Obj;
$contact2Obj->setPrenom('Eric');

echo $contact1Obj->getPrenom(); // Eric
echo '<br>';