<form action="index.php">
	<div id="champ-nom">
		<label for="nom">Nom</label>
		<input type="text" name="nom" id="nom" size="1" value="<?php echo $nom; ?>"/>
	</div>
	<div id="champ-debut">
		<label for="debut">Début</label>
		<input type="time" name="debut" id="debut" value="<?php echo $debut; ?>" size="1"/>
	</div>
	<div id="champ-nbPeriodes">
		<label for="nbPeriodes">Nombre<br/>de périodes</label>
		<input type="number" name="nbPeriodes" id="nbPeriodes" value="<?php echo $nbPeriodes; ?>" size="1" style="width:3em;"/>
	</div>
	<div id="champ-duree">
		<label for="duree">Durée</label>
		<input type="number" name="duree" id="duree" value="<?php echo $duree; ?>" size="1" style="width:3em;"/>
	</div>
	<div id="champ-pause">
		<label for="pause">Pause</label>
		<input type="number" name="pause" id="pause" value="<?php echo $pause; ?>" size="1" style="width:3em;"/>
	</div>
	<div id="champ-jours">
		<label for="jours">Jours</label>
		<textarea name="jours" id="" cols="5" rows="7"><?php echo implode("\r\n", $jours) ?></textarea>
	</div>
	<div><input type="submit" value="Construire"/></div>
</form>