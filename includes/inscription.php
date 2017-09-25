<?php
include 'connection.php'; 

mysql_query("SET NAMES utf8");
$date = gmdate("Y-m-d H:i:s");
mysql_set_charset("utf8");
mb_internal_encoding('UTF-8');
function encrypt($string){
	return base64_encode(base64_encode(base64_encode($string)));
}
function decrypt($string){
	return base64_decode(base64_decode(base64_decode($string)));
}
	$nom 	= htmlentities($_POST['nom']);
	$prenom = htmlentities($_POST['prenom']);
	$pays 	= htmlentities($_POST['pays'], ENT_QUOTES);
	$email  = htmlentities($_POST['email']);
	$eglise = htmlentities($_POST['eglise'], ENT_QUOTES);
	$eglise_autre = htmlentities($_POST['eglise_autre']);
	$adresse = htmlentities($_POST['adresse']);
	$phonefull = htmlentities($_POST['phonefull']);
	if (strlen($phonefull) <= 4){
		$phonefull== "";
	} 
	else 
	{
		$phonefull = htmlentities($_POST['phonefull']);
	}	

$query_email = mysql_query('SELECT DISTINCT email FROM priere WHERE email = "'.$email.'"');
	if (!$query_email) {
		die('Requête invalide : ' . mysql_error());
	}
$num_rows_email	= mysql_num_rows($query_email);	
	if($num_rows_email==0){
		echo 3;
	}
	else{
	$query = mysql_query('SELECT * FROM inscription WHERE email = "'.$email.'"');
	if (!$query) {
		die('Requête invalide : ' . mysql_error());
	}
	$num_rows	= mysql_num_rows($query);
	if($num_rows!=0){
		$sqlupdate = mysql_query("UPDATE inscription SET
			nom ='".$nom."',
			prenom ='".$prenom."',
			pays ='".$pays."',
			email ='".$email."',
			eglise ='".$eglise."',
			eglise_autre ='".$eglise_autre."',
			adresse ='".$adresse."',
			tel ='".$phonefull."',
			date_modification = '".$date."'
			WHERE email = '".$email."'");
			if (!$sqlupdate) {
				die('Requête invalide : ' . mysql_error());
			}

	$fetch= mysql_query("SELECT * FROM priere WHERE email='".$email."'");

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .='Content-Type: text/html; charset="utf-8" \n'; 
	$headers .= 'From: INHAITI <info@inhaiti.net>' . "\r\n";
	
    $message = '<html><body>';
    $message .= '<div style="text-align:center; margin:0 auto; position:relative; display:block;" ><img src="http://messagesdevie.fr/inhaiti/assets/img/placeholder/logo-header.png" alt="INHAITI" /></div>';
    $message .= "<h3 style='text-align:center;'> Shalom&nbsp;<strong>". $_POST['prenom']. ", </strong></h3>";
    $message .= "<p style='text-align:center;'> Vos informations ont bien été mises à jour.<br/> Ci-dessous un résumé de votre sélection de temps de prière.";
    $message .= '<table rules="all" style="border:1px solid #fcfcfc; width:100%; max-width:600px; text-align:center; margin:0 auto;" cellspacing="0" cellpadding="10">';
	
	$message .= "<tr style='background: #eee;'><td><strong>Jour de prière</strong> </td><td><strong>Heure de début</strong></td><td><strong>Heure de fin</strong></td></tr>";
	while ($row = mysql_fetch_assoc($fetch)){
	$oDate = strtotime($row['date_priere']);
	$sDate = date("d-m-Y",$oDate);
    $message .= "<tr>";
    $message .= "<td>" . $sDate."</td>";
    $message .= "<td>" . $row["temps_debut"]."&nbsp;GMT </td>";
    $message .= "<td>" . $row["temps_fin"]."&nbsp;GMT </td>";
    $message .= "</tr>";
	}   
	$message .= "</table>";
	$message .= "<br/>";
	$message .= "<br/>";
    $message .= "<p style='text-align:center;'>Demeurez bénis.<br/><br/><strong>infoline: +22502021531 | info@inhaiti.net | www.inhaiti.net</strong></p>";
    $message .= '<div style="text-align:center; width:450px;margin:0 auto; position:relative; display:block;" ><img src="http://messagesdevie.fr/inhaiti/assets/img/logo-eglise.jpg" alt="INHAITI" style="width:100%"/></div>';
    $message .= "</body></html>";

	mail($email, 'INHAÏTI | Chaîne de prières mondiale', $message, $headers, '-f info@inhaiti.net');
	echo 2;
	}
	else {
		$sqlinsert = mysql_query("
		INSERT INTO inscription(
			nom,
			prenom,
			pays,
			email,
			eglise,
			eglise_autre,
			adresse,
			tel,
			date_ajout)
		VALUES(
			'$nom',
			'$prenom',
			'$pays',
			'$email',
			'$eglise',
			'$eglise_autre',
			'$adresse',
			'$phonefull',
			'$date')");
	if (!$sqlinsert) {
		die('Requête invalide : ' . mysql_error());
	}
	echo 1;
	$fetch= mysql_query("SELECT * FROM priere WHERE email='".$email."'");

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .='Content-Type: text/html; charset="utf-8" \n'; 
	$headers .= 'From: INHAITI <info@inhaiti.net>' . "\r\n";
	
    $message = '<html><body>';
    $message .= '<div style="text-align:center; margin:0 auto; position:relative; display:block;" ><img src="http://messagesdevie.fr/inhaiti/assets/img/placeholder/logo-header.png" style="width:400px" alt="INHAITI" /></div>';
    $message .= "<h3 style='text-align:center;'> Shalom&nbsp;<strong>". $_POST['prenom']. ", </strong></h3>";
    $message .= "<p style='text-align:center;'> Votre inscription a bien été enregistrée.<br/> Ci-dessous un résumé de votre sélection de temps de prière.";
    $message .= '<table rules="all" style="border:1px solid #fcfcfc; width:100%; max-width:600px; text-align:center; margin:0 auto;" cellspacing="0" cellpadding="10">';
	
	$message .= "<tr style='background: #eee;'><td><strong>Jour de prière</strong> </td><td><strong>Heure de début</strong></td><td><strong>Heure de fin</strong></td></tr>";
	while ($row = mysql_fetch_assoc($fetch)){
	$oDate = strtotime($row['date_priere']);
	$sDate = date("d-m-Y",$oDate);
    $message .= "<tr>";
    $message .= "<td>" . $sDate."</td>";
    $message .= "<td>" . $row["temps_debut"]."&nbsp;GMT </td>";
    $message .= "<td>" . $row["temps_fin"]."&nbsp;GMT </td>";
    $message .= "</tr>";
	}   
	$message .= "</table>";
	$message .= "<br/>";
	$message .= "<br/>";
    $message .= "<p style='text-align:center;'>Demeurez bénis.<br/><br/><strong>infoline: +22502021531 | info@inhaiti.net | www.inhaiti.net</strong></p>";
    $message .= '<div style="text-align:center; width:450px;margin:0 auto; position:relative; display:block;" ><img src="http://messagesdevie.fr/inhaiti/assets/img/logo-eglise.jpg" alt="INHAITI" style="width:400px"/></div>';
    $message .= "</body></html>";

	mail($email, 'INHAÏTI | Chaîne de prières mondiale', $message, $headers, '-f info@inhaiti.net');
	}
}
?>