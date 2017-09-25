<?php
include 'connection.php'; 
header ('Content-type: text/html; charset=utf-8');
mysql_query("SET NAMES utf8");
$date = gmdate("Y-m-d H:i:s");
	$email 	= htmlentities($_POST['email']);
	$date_priere 	= htmlentities($_POST['date_priere']);
	$temps_debut = htmlentities($_POST['temps_debut']);
	$temps_fin 	= htmlentities($_POST['temps_fin']);
	
$sql_temporary =mysql_query("
CREATE TABLE IF NOT EXISTS priere (
    priere_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(100),
    date_priere DATE NOT NULL,
    temps_debut VARCHAR(10) NOT NULL,
    temps_fin VARCHAR(10) NOT NULL,
	date_ajout DATE NOT NULL,
    PRIMARY KEY (priere_id)
)");
$sql='SELECT COUNT(priere_id) FROM priere WHERE date_priere ="'.$date_priere.'" AND temps_debut ="'.$temps_debut.'" AND temps_fin = "'.$temps_fin.'" AND email = "'.$email.'" LIMIT 1';
//echo ($sql);
$sql_check=mysql_query($sql);
$row = mysql_fetch_row($sql_check);
//var_dump($row);
//die;
if (!$sql_check) {
    die('Requête invalide : ' . mysql_error());
}

	if($row[0]==0) {
	$sqlinsert = mysql_query("
			INSERT INTO priere(
				email,
				date_priere,
				temps_debut,
				temps_fin,
				date_ajout)
			VALUES(
				'$email',
				'$date_priere',
				'$temps_debut',
				'$temps_fin',
				'$date')");
	echo 1;
	}
	else{
	echo 0;
	}
?>