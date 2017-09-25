<?php
	$hostname='localhost'; 
    $user='root';
    $pass=''; 
    $dbase='app_bd';
    $connection = mysql_connect("$hostname" , "$user" , "$pass") 
            or die ("Impossible de se connecter à la base de données. Contacter l'administrateur.");
    $db = mysql_select_db($dbase , $connection) or die ("Base de données introuvables.");
	
	
	
	/*-------------------------------------------------------------------------------*/
	// inhaiti.net
	
	// $hostname='localhost'; 
    // $user='inhaiti';
    // $pass='NWuzfcc63bTL'; 
    // $dbase='inhaiti';
    // $connection = mysql_connect("$hostname" , "$user" , "$pass") 
            // or die ("Impossible de se connecter à la base de données. Contacter l'administrateur.");
    // $db = mysql_select_db($dbase , $connection) or die ("Base de données introuvables.");
	
	
	/*-------------------------------------------------------------------------------*/
	// messagesdevie.fr
	
	// $hostname='messagesgrvictor.mysql.db'; 
    // $user='messagesgrvictor';
    // $pass='Vainqueur16'; 
    // $dbase='messagesgrvictor';
    // $connection = mysql_connect("$hostname" , "$user" , "$pass") 
            // or die ("Impossible de se connecter à la base de données. Contacter l'administrateur.");
    // $db = mysql_select_db($dbase , $connection) or die ("Base de données introuvables.");
	
?>