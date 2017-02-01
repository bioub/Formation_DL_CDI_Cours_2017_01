# TP Jeudi 02 février

## Exercice 1 : Créer des classes

Dans le projet PHP-Objet, namespace Prepavenir\Entity

Créer les classes avec les propriétés protégées suivantes :

* Acteur : prenom, nom
* Realisateur : prenom, nom
* Film : titre, annee
* Cinema : nom, ville

Générer les getters / setters

## Exercice 2 : Associations

Associer la classe Film à un Realisateur et plusieurs Acteur.
Ecrire un petit programme de test qui rempli le film avec titre, annee, realisateurs + acteurs et qui affichent les infos

Associer la classe Cinema à la classe Film côté Cinema (à vous de voir le type de relation 1..1, 1..n, n..m)
Ecrire un petit programme de test qui rempli le cinema...

## Exercice 3 : Créer un projet Symfony

En vous aidant de la doc Symfony (Getting Started / Setup), créer
un projet CinemaSymfony (appli de gestion de Cinema)

## Exercice 4 : Créer des controllers et des actions Symfony

Créer les controller Cinema et Film avec au moins une action show (afficher).

Remplir les vues Twig avec du faux texte (HTML)
 
Option : personnaliser les titres, les CSS de chaque page...
