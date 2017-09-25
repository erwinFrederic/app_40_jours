<?php
	include 'connection.php';
	
	$nom 	= htmlentities($_POST['nom']);
	$prenom = htmlentities($_POST['prenom']);
	$pays 	= htmlentities($_POST['pays']);
	$email  = htmlentities($_POST['email']);
	$eglise = htmlentities($_POST['eglise']);
	$eglise_autre = htmlentities($_POST['eglise_autre']);
	$adresse = htmlentities($_POST['adresse']);
	$phonefull = htmlentities($_POST['phonefull']);
?>
<h5 style="text-align:center; color:#384095;">Vos informations personnelles</h5>
<div class="info-resume">
<div class="col-md-4 border-title-1">Nom</div><div class="col-md-8"><strong><?php echo $nom;?></strong></div>
<div class="clearfix"></div>
<div class="col-md-4 border-title-1">Prénom(s)</div><div class="col-md-8"><strong><?php echo $prenom;?></strong></div>
<div class="clearfix"></div>
<div class="col-md-4 border-title-1">Pays</div><div class="col-md-8"><strong><?php echo $pays;?></strong></div>
<div class="clearfix"></div>
<div class="col-md-4 border-title-1">Email</div><div class="col-md-8"><strong><?php echo $email;?></strong></div>
<div class="clearfix"></div>
<div class="col-md-4 border-title-1">Communauté</div><div class="col-md-8"><strong>
<?php 
	if((empty($eglise))){
		echo $eglise_autre;
	}
	else
	{
		echo $eglise;
	}
	if((empty($eglise)) AND (empty($eglise_autre))){
		echo "<span class=\"red\">Non défini</span>";
	}
?></strong></div>
<div class="clearfix"></div>
<div class="col-md-4 border-title-1">Téléphone</div><div class="col-md-8"><strong><?php 
	if (strlen($phonefull) <= 4){
		echo "<span class=\"red\">Non défini</span>";
	} 
	else 
	{
		echo $phonefull;
	}	
?></strong></div>
<div class="clearfix"></div>
<div class="col-md-4 border-title-1">Adresse</div><div class="col-md-8"><strong><?php
	if((empty($adresse))){
		echo "<span class=\"red\">Non défini</span>";
	}
	else{
		echo $adresse;
	}
?></strong></div>
<div class="clearfix"></div>
</div>	