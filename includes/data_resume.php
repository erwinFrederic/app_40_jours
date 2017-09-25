<?php include 'connection.php'; 
	
	$email  = htmlentities($_POST['email']);
	$fetch= mysql_query("SELECT * FROM priere WHERE email='".$email."'");
		if (!$fetch) {
			die('Requête invalide : ' . mysql_error());
		}
	$num_rows_data	= mysql_num_rows($fetch);

	if($num_rows_data==0){
		?>

		<h4 style="margin-top:85px;" class="alert alert-warning" ><i class="fa fa-warning animated bounce"></i> Vous n'avez pas sélectionné de temps de prière.</h4>
		<?php		
	}
	else
	{
	// echo '<h5 style="text-align:center">Vous avez choisi <strong>',($num_rows_data),'</strong> temps de prière</h5>';	
?>
<table id="mytable" class="table table-striped table-hover">
<h5 style="text-align:center; color:#384095;">Vos horaires de prières choisis</h5>
	<thead class="the-box dark full">
		<tr>
			<th>N°</th>
			<th>Jour de prière</th>
			<th>Heure de début</th>
			<th>Heure de fin</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$i=1;
		while ($row = mysql_fetch_assoc($fetch)){
		?>
		<tr class="odd gradeX">
			<td><?php echo $i ?></td>
			<td><?php $oDate = strtotime($row['date_priere']);
				$sDate = date("d-m-Y",$oDate);
				echo $sDate
			?></td>
			<td><?php echo $row['temps_debut'],'&nbsp; GMT'; ?></td>
			<td><?php echo $row['temps_fin'],'&nbsp; GMT'; ?></td>
			<td>
				<a href="#Modal_supprimer<?php echo $i;?>" data-sfid='"<?php echo $row['priere_id'];?>"'tabindex="-1"  data-toggle="modal" data-tooltip="tooltip" title="Supprimer" class="btn btn-danger btn-xs">
					<i class="fa fa-trash-o"></i>
				</a>
					<!-- Modal supprimer-->
					<div class="modal fade" id="Modal_supprimer<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
					  <div class="modal-dialog">
					  <form>
						<div class="modal-content modal-no-shadow modal-no-border">
						  <div class="modal-header bg-primary no-border">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Supprimer une temps de prière</h4>
						  </div>
						  <div class="modal-body">
						  <h4><?php echo'Date : ',$sDate;?></h4>
							Êtes-vous sûr de vouloir supprimer votre horaire de <strong><?php echo $row['temps_debut']; ?> à <strong><?php echo $row['temps_fin']; ?> GMT<strong> ?
								<input type="hidden" name="priere_id" id="priere_id" value="<?php echo $row['priere_id'] ?>">
								<input type="hidden" name="email_get" id="email_get" value="<?php echo $row['email'] ?>">
						  </div>
						  <div class="modal-footer">
							<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
								<div id="result_save_3"></div>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler" >
								<input type="button" name="supprimer_priere" id="supprimer_priere" data-backdrop="false" data-dismiss="modal"  class="btn btn-danger" value="Supprimer" style="margin-top:0;">
							</div>
						  </div>
						</div>
						</form>
					  </div>
					</div>
			</td>
			<?php
			$i++;
			};
			mysql_close();
	}
		?>
<script>	
	$('input[name="supprimer_priere"]').click(function(e){
		var parent = $(this).parents('.modal-content');
		var parent_b = $(this).parents('.modal-footer');
		var priere_id = $(parent).find('#priere_id').val();
		var email_get = $(parent).find('#email_get').val();
		// var priere_id = $("#priere_id");
		// alert(priere_id);
		// var result = $('#result_save_3');
		var result = $(parent).find('#result_save_3');
		result.html('<span class="warning">Vérification... <i class="fa fa-spinner fa-spin"></i></span>');
		var UrlToPass ='&priere_id='+priere_id
			$.ajax({
			type : 'POST',
			data : UrlToPass,
			url  : 'includes/data_delete.php',
			success: function(responseText){
				if(responseText == 0){
					result.html('Problème d\'accès au serveur. Vérifiez l\'etat server.');
				}
				else if(responseText == 1){
				result.html('Supprimer avec succès.');			
				setTimeout(function () {
					 $(parent).find('.close').trigger('on');
					 result.html('');
				 }, 1500);
				$('#table_get_data').fadeOut(100, function(){
				var UrlToPass ='&email='+email_get
				var result = $('#result_save_2');
						$.ajax({
						type : 'POST',
						data : UrlToPass,
						url  : 'includes/data_resume.php',
						success: function(data){
						// $('.modal-backdrop').remove();	
						$("#table_get_data").html(data).fadeIn().delay(3000);			
						}
					});
				});
				 
				}
			}
		});
	});
</script>

</tbody>
</table>
