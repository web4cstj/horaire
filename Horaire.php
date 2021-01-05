<?php
class Horaire {
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
	static public function entete($nom, $jours) {
		$resultat = '<thead>';
		if ($nom!="") $resultat .= '<tr><th colspan="'.(count($jours)+1).'"><h1>Horaire de '.$nom.'</h1></th></tr>';
		$resultat .= '<tr>';
		$resultat .= '<th>&nbsp;</th>';
		foreach($jours as $jour) {
			$resultat .= '<th>'.$jour.'</th>';
		}
		$resultat .= '</tr>';
		$resultat .= '</thead>';
		return $resultat;
	}
	static public function corps($debut=360, $nbPeriodes=12, $duree=60, $pause=0, $nbJours=7) {
		$resultat = '<tbody>';
		for ($i=0; $i<$nbPeriodes; $i++) {
			$heure = $debut+$i*$duree;
			$resultat .= Horaire::rangee($heure, $heure+$duree-$pause, $nbJours);
		}
		$resultat .= '</tbody>';
		return $resultat;
	}
	static public function rangee($debut, $fin, $nbJours=7) {
		$resultat = '<tr>';
		$resultat .= Horaire::celluleHeure($debut, $fin);
		for ($i=0; $i<$nbJours; $i++) {
			$resultat .= '<td>&nbsp;</td>';
		}
		$resultat .= '</tr>';
		return $resultat;
	}
	static public function celluleHeure($debut, $fin) {
		$resultat = '<th>'.Horaire::minutesEnHeures($debut)."<br/>à<br/>".Horaire::minutesEnHeures($fin).'</th>';
		return $resultat;
	}
	static public function minutesEnHeures($min) {
		$resultat = str_pad(floor($min/60), 2, "0", STR_PAD_LEFT).":".str_pad($min%60, 2, "0", STR_PAD_LEFT);
		return $resultat;
	}
	static public function heuresEnMinutes($h) {
		$h = explode(":", $h);
		$resultat = intval($h[0])*60+intval($h[1]);
		return $resultat;
	}
}
?>