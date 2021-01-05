
Exercice "Horaire"
==================

Consignes générales
-------------------
1. Reproduire la page à l'adresse http://prof-tim.cstj.qc.ca/cours/web3/horaire/index.php en utilisant une classe.
1. Créer un dossier de travail nommé horaire et l'ouvrir en tant que projet Brackets.
1. Se fier à la source de la page index.php pour déterminer la structure du HTML
1. Nom de la classe : `Horaire`
1. Toutes les méthodes sont statiques
1. Les méthodes doivent s'utiliser l'une l'autre lorsque possible (et souhaitable)

Méthode affichage
-----------------
1. Méthode `affichage` qui retourne le HTML de l'horaire au complet à partir des paramètres ci-dessous.
1. $nom (string) : Le nom à mettre au haut de l'horaire dans le thead. Valeur par défaut : "".
1. $debut (int) : L'heure (en minute) du début de l'horaire. Valeur par défaut : 360.
1. $nbPeriodes (int) : Le nombre de périodes à afficher. Valeur par défaut : 12.
1. $duree (int) : La durée (en minutes) entre chaque périodes. Valeur par défaut : 60.
1. $pause (int) : Le nombre de minutes entre la fin d'une période et le début de l'autre. Valeur par défaut : 0.
1. $jours (array) : Les jours à afficher en haut de chaque colonne. Valeur par défaut : Un array contenant tous les jours de la semaine (hardcode).
1. Valeur de retour (string) : Le HTML de l'horaire (table)

Méthode entete
--------------
1. Méthode `entete` qui retourne le HTML de l'entete de l'horaire (thead)
1. $nom (string) : Le nom à mettre au haut du thead. Valeur par défaut : Aucune. NOTE: Si sa valeur est vide, on ne met pas la rangée correspondante.
1. $jours (array) : Les jours à afficher dans la 2e rangée de l'entete. Valeur par défaut : Aucune.
1. Valeur de retour (string) : Le HTML de l'entete (thead)

Méthode corps
-------------
1. Méthode `corps` qui retourne le HTML du corps de l'horaire (tbody)
1. $debut (int) : L'heure (en minute) du début de l'horaire. Valeur par défaut : 360.
1. $nbPeriodes (int) : Le nombre de périodes à afficher. Valeur par défaut : 12.
1. $duree (int) : La durée (en minutes) entre chaque périodes. Valeur par défaut : 60.
1. $pause (int) : Le nombre de minutes entre la fin d'une période et le début de l'autre. Valeur par défaut : 0.
1. $nbJours (int) : Le nombre de cases vides à afficher dans chaque colonne. Valeur par défaut : 7.
1. Valeur de retour (string) : Le HTML du corps de l'horaire (tbody)

Méthode celluleHeure
--------------------
1. Méthode `celluleHeure` qui retourne le HTML de la cellule grise au début de chaque rangée
1. $debut (int) : L'heure (en minute) du début de la période. Valeur par défaut : Aucune.
1. $fin (int) : L'heure (en minute) de la fin de la période. Valeur par défaut : Aucune.
1. Valeur de retour (string) : Le HTML de la cellule.

Méthode rangee
--------------
1. Méthode `rangee` qui retourne le HTML d'une rangée du corps de l'horaire
1. $debut (int) : L'heure (en minute) du début de la période. Valeur par défaut : Aucune.
1. $fin (int) : L'heure (en minute) de la fin de la période. Valeur par défaut : Aucune.
1. $nbJours (int) : Le nombre de cases vides à afficher dans chaque colonne. Valeur par défaut : 7.
1. Valeur de retour (string) : Le HTML de la rangée (tr)

Méthode minutesEnHeures
-----------------------
1. Méthode `minutesEnHeures` qui retourne la version textuelle d'une heure donnée en minutes (ex.: 525 donne "8:45")
1. $min (int) : L'heure (un minutes) à convertir en heures. Valeur par défaut : Aucune.
1. Valeur de retour (string) : Le l'heure convertie

Méthode heuresEnMinutes
-----------------------
1. Méthode `heuresEnMinutes` qui retorne les minutes correspondant à une heure (ex.: "8:45" donne 525)
1. $heure (string) : L'heure en format textuel. Valeur par défaut : Aucune.
1. Valeur de retour (int) : Les minutes correspondant à l'heure.

