<?php
require_once 'classes/Contact.php';
require_once 'classes/Societe.php';

$google = new \Prepavenir\Entity\Societe();
$google->setNom('Google');
$google->setVille('Mountain View');

$sergey = new \Prepavenir\Entity\Contact();
$sergey->setPrenom('Sergey');
$sergey->setNom('Brin');

$larry = new \Prepavenir\Entity\Contact();
$larry->setPrenom('Larry');
$larry->setNom('Page');

$google->addContact($sergey);
$google->addContact($larry);


/// HTML

echo $google->getNom() . '<br>'; // Google
echo $google->getVille() . '<br>'; // Mountain View
foreach ($google->getContacts() as $contact) {
    echo $contact->getPrenom() . ' ' . $contact->getNom() . '<br>';
}
