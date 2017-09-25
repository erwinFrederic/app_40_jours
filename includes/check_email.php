    <?php
	include 'connection.php'; 
	$email  = htmlentities($_POST['email']);
	
	$query	= mysql_query('SELECT email FROM inscription WHERE email = "'.$email.'"');
	$num_rows	= mysql_num_rows($query);
	if($num_rows!=0){
	echo 'false';
	}
	else {
	echo 'true';
	}
    ?>