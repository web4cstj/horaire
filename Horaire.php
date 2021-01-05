<?php
class Horaire {
	/** Méthode `affichage` qui 
	 * Retourne le HTML de l'horaire au complet à partir des paramètres ci-dessous.
	 * @param string $nom Le nom à mettre au haut de l'horaire dans le thead. Valeur par défaut : "".
	 * @param integer $debut L'heure (en minute) du début de l'horaire. Valeur par défaut : 360.
	 * @param integer $nbPeriodes Le nombre de périodes à afficher. Valeur par défaut : 12.
	 * @param integer $duree La durée (en minutes) entre chaque périodes. Valeur par défaut : 60.
	 * @param integer $pause Le nombre de minutes entre la fin d'une période et le début de l'autre. Valeur par défaut : 0.
	 * @param array $jours Les jours à afficher en haut de chaque colonne. Valeur par défaut : Un array contenant tous les jours de la semaine (hardcode).
	 * @return string Le HTML de l'horaire (table)
	 * @uses entete
	 * @uses corps
	 */

	
	/** Méthode `entete`
	 * Retourne le HTML de l'entete de l'horaire (thead)
	 * @param string $nom Le nom à mettre au haut du thead. Valeur par défaut : Aucune. NOTE: Si sa valeur est vide, on ne met pas la rangée correspondante.
	 * @param array $jours Les jours à afficher dans la 2e rangée de l'entete. Valeur par défaut : Aucune.
	 * @return string Le HTML de l'entete (thead)
	 */
	
	 
	/** Méthode `corps`
	 * Retourne le HTML du corps de l'horaire (tbody)
	 * @param integer $debut L'heure (en minute) du début de l'horaire. Valeur par défaut : 360.
	 * @param integer $nbPeriodes Le nombre de périodes à afficher. Valeur par défaut : 12.
	 * @param integer $duree La durée (en minutes) entre chaque périodes. Valeur par défaut : 60.
	 * @param integer $pause Le nombre de minutes entre la fin d'une période et le début de l'autre. Valeur par défaut : 0.
	 * @param integer $nbJours Le nombre de cases vides à afficher dans chaque colonne. Valeur par défaut : 7.
	 * @return string Le HTML du corps de l'horaire (tbody)
	 * @uses rangee
	 */
	
	 

	/** Méthode `rangee`
	 * Retourne le HTML d'une rangée du corps de l'horaire
	 * @param integer $debut L'heure (en minute) du début de la période. Valeur par défaut : Aucune.
	 * @param integer $fin L'heure (en minute) de la fin de la période. Valeur par défaut : Aucune.
	 * @param integer $nbJours Le nombre de cases vides à afficher dans chaque colonne. Valeur par défaut : 7.
	 * @return string Le HTML de la rangée (tr)
	 * @uses celluleHeure
	 */
	
	 

	/** Méthode `celluleHeure`
	 * Retourne le HTML de la cellule grise au début de chaque rangée
	 * @param integer $debut L'heure (en minute) du début de la période. Valeur par défaut : Aucune.
	 * @param integer $fin L'heure (en minute) de la fin de la période. Valeur par défaut : Aucune.
	 * @return string Le HTML de la cellule.
	 * @uses minutesEnHeures
	 */
	
	 
	 
	/** Méthode `minutesEnHeures`
	 * Retourne la version textuelle d'une heure donnée en minutes (ex.: 525 donne "8:45")
	 * @param integer $min L'heure (un minutes) à convertir en heures. Valeur par défaut : Aucune.
	 * @return string Le l'heure convertie
	 * CETTE MÉTHODE EST COMPLÈTE
	 */
	static public function minutesEnHeures($min) {
		$heures = floor($min / 60);
		$heures = str_pad($heures, 2, "0", STR_PAD_LEFT);
		$minutes = $min % 60;
		$minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
		$resultat = $heures.":".$minutes;
		return $resultat;
	}

	/** Méthode `heuresEnMinutes`
	 * Retourne les minutes correspondant à une heure (ex.: "8:45" donne 525)
	 * @param string $heure L'heure en format textuel. Valeur par défaut : Aucune.
	 * @return integer Les minutes correspondant à l'heure.
	 * CETTE MÉTHODE EST COMPLÈTE
	 */
	static public function heuresEnMinutes($h) {
		$h = explode(":", $h);
		$resultat = intval($h[0])*60 + intval($h[1]);
		return $resultat;
	}
}
