<?php
/*
 * Ecrire la classe CompteBancaire qui permette à ce code
 * de fonctionner
 */

require_once 'classes/CompteBancaire.php';

$bnp = new Prepavenir\Exercice\CompteBancaire();
$bnp->setNumero('000014825852');
$bnp->setProprietaire('Charles');

$bnp->crediter(8000);
$bnp->debiter(2500);

echo $bnp->getSolde(); // 5500