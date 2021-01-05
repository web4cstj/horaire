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
	static public function affichage($nom="", $debut=360, $nbPeriodes=12, $duree=60, $pause=0, $jours=array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi')) {
		$nbJours = count($jours);
		$resultat = '<table class="horaire">';
		$resultat .= '<col span="1" style="width:3em;"/>';
		$resultat .= '<col span="'.$nbJours.'" style="width:8em;"/>';
		$resultat .= Horaire::entete($nom, $jours);
		$resultat .= Horaire::corps($debut, $nbPeriodes, $duree, $pause, $nbJours);
		$resultat .= '</table>';
		return $resultat;
	}
	/** Méthode `entete`
	 * Retourne le HTML de l'entete de l'horaire (thead)
	 * @param string $nom Le nom à mettre au haut du thead. Valeur par défaut : Aucune. NOTE: Si sa valeur est vide, on ne met pas la rangée correspondante.
	 * @param array $jours Les jours à afficher dans la 2e rangée de l'entete. Valeur par défaut : Aucune.
	 * @return string Le HTML de l'entete (thead)
	 */
	static public function entete($nom, $jours) {
		$resultat = '';
		$resultat .= '<thead>';
		if ($nom!="") {
			$resultat .= '<tr>';
			$resultat .= '<th colspan="'.(count($jours)+1).'">';
			$resultat .= '<h1>Horaire de '.$nom.'</h1>';
			$resultat .= '</th>';
			$resultat .= '</tr>';
		}
		$resultat .= '<tr>';
		$resultat .= '<th>&nbsp;</th>';
		foreach($jours as $jour) {
			$resultat .= '<th>'.$jour.'</th>';
		}
		$resultat .= '</tr>';
		$resultat .= '</thead>';
		return $resultat;
	}
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
	static public function corps($debut=360, $nbPeriodes=12, $duree=60, $pause=0, $nbJours=7) {
		$resultat = '';
		$resultat .= '<tbody>';
		for ($i=0; $i<$nbPeriodes; $i++) {
			$heure = $debut+$i*$duree;
			$resultat .= Horaire::rangee($heure, $heure+$duree-$pause, $nbJours);
		}
		$resultat .= '</tbody>';
		return $resultat;
	}
	/** Méthode `rangee`
	 * Retourne le HTML d'une rangée du corps de l'horaire
	 * @param integer $debut L'heure (en minute) du début de la période. Valeur par défaut : Aucune.
	 * @param integer $fin L'heure (en minute) de la fin de la période. Valeur par défaut : Aucune.
	 * @param integer $nbJours Le nombre de cases vides à afficher dans chaque colonne. Valeur par défaut : 7.
	 * @return string Le HTML de la rangée (tr)
	 * @uses celluleHeure
	 */
	static public function rangee($debut, $fin, $nbJours=7) {
		$resultat = '';
		$resultat .= '<tr>';
		$resultat .= Horaire::celluleHeure($debut, $fin);
		for ($i=0; $i<$nbJours; $i++) {
			$resultat .= '<td>&nbsp;</td>';
		}
		$resultat .= '</tr>';
		return $resultat;
	}
	/** Méthode `celluleHeure`
	 * Retourne le HTML de la cellule grise au début de chaque rangée
	 * @param integer $debut L'heure (en minute) du début de la période. Valeur par défaut : Aucune.
	 * @param integer $fin L'heure (en minute) de la fin de la période. Valeur par défaut : Aucune.
	 * @return string Le HTML de la cellule.
	 * @uses minutesEnHeures
	 */
	static public function celluleHeure($debut, $fin) {
		$resultat = '';
		$resultat .= '<th>';
		$resultat .= Horaire::minutesEnHeures($debut);
		$resultat .= '<br/>';
		$resultat .= 'à';
		$resultat .= '<br/>';
		$resultat .= Horaire::minutesEnHeures($fin);
		$resultat .= '</th>';
		return $resultat;
	}
	/** Méthode `minutesEnHeures`
	 * Retourne la version textuelle d'une heure donnée en minutes (ex.: 525 donne "8:45")
	 * @param integer $min L'heure (un minutes) à convertir en heures. Valeur par défaut : Aucune.
	 * @return string Le l'heure convertie
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
	 */
	static public function heuresEnMinutes($h) {
		$h = explode(":", $h);
		$resultat = intval($h[0])*60 + intval($h[1]);
		return $resultat;
	}
}
