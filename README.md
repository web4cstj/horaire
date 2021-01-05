
Exercice "Horaire"
==================

Consignes générales
-------------------
1. Télécharger le dossier `horaire-depart` sur Github.
1. Ouvrir le dossier comme projet VSCode.
1. Démarrer le serveur Web.
1. Se fier au fichier `exemple.html` pour déterminer la structure du HTML
1. Se familiariser avec l'application sur le site du cours afin de bien comprendre son fonctionnement.
1. Compléter la phase 1
1. Compléter la phase 2

Phase 1 : Les données
---------------------
1. Ouvrir le fichier `index.php`
1. Ajouter le code permettant de récupérer les 6 données
1. Faire des `var_dump` pour tester l'application.

Phase 2 : Les méthodes
----------------------
1. Ouvrir le fichier `Horaire.php`
1. Compléter les méthodes mentionnées dans le document
1. Toutes les méthodes sont statiques
1. Les méthodes doivent s'utiliser l'une l'autre lorsque possible (et souhaitable)
1. La description détaillée de chaque méthode se trouve dans le fichier.

| Méthode         | Description
|-----------------|----------------------------------------------
|`affichage`      | Retourne le HTML de l'horaire au complet à partir des paramètres ci-dessous.
|`entete`         | Retourne le HTML de l'entete de l'horaire (thead)
|`corps`          | Retourne le HTML du corps de l'horaire (tbody)
|`celluleHeure`   | Retourne le HTML de la cellule grise au début de chaque rangée
|`rangee`         | Retourne le HTML d'une rangée du corps de l'horaire
|`minutesEnHeures`| Retourne la version textuelle d'une heure donnée en minutes (ex.: 525 donne "8:45")
|`heuresEnMinutes`| Retourne les minutes correspondant à une heure (ex.: "8:45" donne 525)

