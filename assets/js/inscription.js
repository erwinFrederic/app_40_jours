$(document).ready(function () {
	
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	var email = $("#email");
	var UrlToPass ='&email='+email.val()
	var result = $('#result_save_2');
			$.ajax({
			type : 'POST',
			data : UrlToPass,
			url  : 'includes/data_resume.php',
			success: function(data){
			$("#table_get_data").html(data)				
			}
		});
	});
	
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	
	var nom = $("#nom");
	var prenom = $("#prenom");
	var pays = $("#pays");
	var email = $("#email");
	var eglise = $("#eglise");
	var eglise_autre = $("#eglise_autre");
	var adresse = $("#adresse");
	var phonefull = $("#phonefull").val($("#tel").intlTelInput("getNumber"));

	var UrlToPass ='&nom='+nom.val()
				+'&prenom='+prenom.val()
				+'&pays='+pays.val()
				+'&email='+email.val()
				+'&eglise='+eglise.val()
				+'&eglise_autre='+eglise_autre.val()
				+'&adresse='+adresse.val()
				+'&phonefull='+phonefull.val()
	var result = $('#result_save_2');
			$.ajax({
			type : 'POST',
			data : UrlToPass,
			url  : 'includes/info_resume.php',
			success: function(data){
			$("#table_get_info").html(data)				
			}
		});
	});
	
	$('#save-info').click(function(e){
		
		var nom = $("#nom");
		var prenom = $("#prenom");
		var pays = $("#pays");
		var email = $("#email");
		var eglise = $("#eglise");
		var eglise_autre = $("#eglise_autre");
		var adresse = $("#adresse");
		var phonefull = $("#phonefull").val($("#tel").intlTelInput("getNumber"));
		
		var result = $('#result_save_2');

		result.html('<span class="warning">Vérification... <i class="fa fa-spinner fa-spin"></i></span>');
		
		if(nom.val() == ''){
			result.html('<span class="error">Nom incorrect.</span>');
			return false;
		}
		if(prenom.val() == ''){
			result.html('<span class="error">Prénom(s) incorrect(s).</span>');
			return false;
		}
		if(email.val() == ''){
			result.html('<span class="error">Adresse email incorrect.</span>');
			return false;
		}
			var UrlToPass ='&nom='+nom.val()
						+'&prenom='+prenom.val()
						+'&pays='+pays.val()
						+'&email='+email.val()
						+'&eglise='+eglise.val()
						+'&eglise_autre='+eglise_autre.val()
						+'&adresse='+adresse.val()
						+'&phonefull='+phonefull.val()
			$.ajax({
			type : 'POST',
			data : UrlToPass,
			url  : 'includes/inscription.php',
			success: function(responseText){
				if(responseText == 0){
					result.html('Problème d\'accès au serveur. Vérifiez l\'etat server.');
				}
				else if(responseText == 1){
					result.html('Informations bien enrégistrées.');
					
					setTimeout(function () {
						 result.html('');
					 },5000);
				 
				}
			
				else if(responseText == 2){
					result.html('Vos informations ont bien été mises à jour.');
					
					setTimeout(function () {
						 result.html('');
					 },5000);
				 
				}				
				else if(responseText == 3){
					result.html('Vous n\'avez pas choisi de temps de prière.');
					
					setTimeout(function () {
						 result.html('');
					 },5000);
				 
				}
				else{
					result.html('Problème d\'accès au serveur. Vérifiez l\'etat server.');
					
					setTimeout(function () {
						 result.html('');
					 },5000);
				 
				}
			}
			});
	});
});	
