<?php
include('Horaire.php');
$nom = '';
if (isset($_GET['nom'])) {
	$nom = $_GET['nom'];
}
$debut = '06:00';
if (isset($_GET['debut'])) {
	$debut = $_GET['debut'];
}
$minutesDebut = Horaire::heuresEnMinutes($debut);
$nbPeriodes = 12;
if (isset($_GET['nbPeriodes'])) {
	$nbPeriodes = intval($_GET['nbPeriodes']);
}
$duree = 60;
if (isset($_GET['duree'])) {
	$duree = intval($_GET['duree']);
}
$pause = 0;
if (isset($_GET['pause'])) {
	$pause = intval($_GET['pause']);
}
$jours = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
if (isset($_GET['jours'])) {
	$jours = $_GET['jours'];
	
	//Version plus flexible qui accepte également les sauts de lignes
	$jours = preg_replace("#\\r\\n|\\n\\r|\\n|\\r#", ";", $jours);

	$jours = explode(";",$jours);
	//Pour enlever les vides
	$jours = array_filter($jours);
}
$affichage = Horaire::affichage($nom, $minutesDebut, $nbPeriodes, $duree, $pause, $jours);

?><!DOCTYPE html>
<html lang="fr">
<head>
<title>Horaire</title>
<meta charset="utf-8" />
<link href="css/horaire.css" rel="stylesheet" />
</head>

<body>
<div class="interface">
	<header><h1>Horaire</h1></header>
	<footer>
		<span>&copy; Cégep de Saint-Jérôme</span>
		<span>Département des techniques d'Intégration multimédia</span>
		<span>Intégration Web III</span>
		<span>Martin Boudreau</span>
	</footer>
	<div class="sections">
		<section class="affichage">
			<?php echo $affichage ?>
		</section>
		<section class="options">
			<h1>Options</h1>
			<h2>Liens directs</h2>
			<ul class="essais">
			<li><a href="index.php">Original</a></li>
			<li><a href="index.php?nom=Rita+Raté">Essai nom</a></li>
			<li><a href="index.php?debut=08:00">Essai début</a></li>
			<li><a href="index.php?nbPeriodes=11">Essai nombre de périodes</a></li>
			<li><a href="index.php?duree=55">Essai durée</a></li>
			<li><a href="index.php?pause=5">Essai pause</a></li>
			<li><a href="index.php?jours=Lundi;Mardi;Mercredi;Jeudi;Vendredi">Essai jours</a></li>
			<li><a href="index.php?nom=Rita+Raté&amp;debut=08:00&amp;nbPeriodes=11&amp;duree=55&amp;pause=5&amp;jours=Lundi;Mardi;Mercredi;Jeudi;Vendredi">Essai TOUT</a></li>
			<li><a href="formulaire.php">Formulaire</a></li>
			<li><a href="consignes.html">(Les consignes)</a></li>
			</ul>
			<h2>Formulaire</h2>
			<?php include "form.inc.php" ?>
		</section>
	</div>
</div>
</body>
</html>
