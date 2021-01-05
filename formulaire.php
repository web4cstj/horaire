<?php
$nom = "";
$debut = "08:00";
$nbPeriodes = "11";
$pause = "5";
$duree = "55";
$jours = [
	"Lundi",
	"Mardi",
	"Mercredi",
	"Jeudi",
	"Vendredi",
];
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="css/horaire.css"/>
	<title>Construisez votre horaire</title>
</head>
<body>
	<div class="interface">
		<section><header><h1>Construisez<br/>votre horaire</h1></header>
			<?php include "form.inc.php"; ?></section>
	</div>
</body>
</html>