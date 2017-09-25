	$(document).on('click','#tmp_modal_submit',function(event){
		event.preventDefault();
		var date_priere = $(this).data('date');
		var parent = $(this).parents('.modal-content');
		
		var temps_debut = $(parent).find('select[name=temps_debut]').val();
		var temps_fin = $(parent).find('select[name=temps_fin]').val();
		var email = $("#form-general input[name=email]").val();
		var result = $('.result_modal');


		result.html('<span class="error">Vérification... <i class="fa fa-spinner fa-spin"></i></span>');
		if(temps_debut >= temps_fin){
			result.html('<span class="error">Sélectionner un temps de prière correct.</span>');
			return false;
		}
		var UrlToPass = '&date_priere='+date_priere
					+'&temps_debut='+temps_debut
					+'&email='+email
					+'&temps_fin='+temps_fin
					
		//alert(UrlToPass);
		$.ajax({
		type : 'POST',
		data : UrlToPass,
		url  : 'includes/tmp.php',
		success: function(responseText){
			
			if(responseText == 0){			
				result.html('<span class="error">Vous avez déjà choisi ce temps de prière.</span>');
				
				setTimeout(function () {
					 result.html('');
				 },6000);
			}
			else if(responseText == 1){
				result.html('<span class="error">Enrégistrer avec succès.</span>');				
				
				setTimeout(function () {
					 $(parent).find('.close').trigger('click');
					 result.html('');
				 }, 1500);
			}
			else{
				result.html('<span class="error">Problème d\'accès au serveur. Vérifiez l\'etat server.</span>');
				setTimeout(function () {
					 result.html('');
				 },6000);
			}
		}
		});
	});	

