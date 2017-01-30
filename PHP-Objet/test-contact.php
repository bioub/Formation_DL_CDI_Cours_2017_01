<?php
require_once 'classes/Contact.php';

$romain = new \Prepavenir\Entity\Contact();
$romain->setPrenom('Romain');

echo $romain->getPrenom();