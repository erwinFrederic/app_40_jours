    <?php
	include 'connection.php'; 
	$priere_id  = htmlentities($_POST['priere_id']);
	$sqldelete = "delete from priere where priere_id = ".$priere_id."";
	$resultat= mysql_query($sqldelete) or die('0'.$sqldelete.'<br>'.mysql_error());
	echo '1';
    ?>