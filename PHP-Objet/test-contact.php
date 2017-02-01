<?php
require_once 'vendor/autoload.php';



$romain = new \Prepavenir\Entity\Contact();
$romain->setPrenom('Romain');

echo $romain->getPrenom();