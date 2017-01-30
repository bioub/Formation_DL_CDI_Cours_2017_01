Cours git
=========

Introduction
------------

git est un outil de gestion de version (SCM) de fichiers (principalement textes).

Il est particulièrement adapté au développement logiciel et facilite la collaboration.
Il a été créé par Linus Torvald pour le développment du noyau Linux.

Création d'un dépôt git (repository git)
----------------------------------------

Si le projet est nouveau :

    git init

Commandes de base
-----------------

Une modification peut passer par 3 états :

* untracked : pas prise en compte pour la prochaine version
* cached/indexed : prise en compte pour la prochaine version
* commited : sauvegardée

Pour surveiller l'état des modifications on utilise la commande

    git status -u
    
Pour prendre en compte une modification dans un fichier on utilise la commande

    git add chemin_vers_le_fichier.ext
    
Pour créer une version à partir des fichiers ajouté à l'index :

    git commit -m "Une description des modifications"
    
Pour voir l'historique des modifications

    git log
    git log --oneline
    
Ignorer des fichiers
--------------------

Pour ignore un fichier, il suffit de versionner un fichier nommé .gitignore
et y indiquer tous les fichiers ou dossiers à ignorer, exemple :

    .idea
    *.tmp
    *.psd
    vendor
    
Cloner un dépôt
---------------

    git clone URL_DU_DEPOT
    git clone https://github.com/bioub/Formation_Git_2017_01.git
    
Synchroniser des dépôts
-----------------------

Rappatrier les commits

    git pull -u origin master
    git pull
    
Publier vos commits

    git push
    
Pour pouvoir faire un `git push` il faut être à jour, c'est à dire faire un `git pull`
si nécessaire.
