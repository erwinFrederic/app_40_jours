<?php
include('includes/connection.php'); 
include('date_fr.php');
?>
<!doctype html>
<html>

<head>
	<!-- ## SITE META ## -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>INHAITI | Chaîne de prières | Préinscription</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="assets/img/placeholder/favicon.ico">

	<!-- ## LOAD STYLSHEETS ## -->
	<link rel="stylesheet" media="all" href="assets/css/style.css"/>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clockpicker.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	
	<!-- ## GOOGLE FONTS ## -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	
	
	<!--DATE PICKER--
  <script type="text/javascript" src="jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />

  <script type="text/javascript" src="lib/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker.css" />-->
  
  <!-- TEL -->
  <link rel="stylesheet" type="text/css" href="assets/css/intlTelInput.css" />
		
</head>

<body>

<!-- ## HEADER ## -->
<header id="qcHeader">
	<div class="row">

		<!-- ## LOGO ## -->
		<div id="qcLogo" class="col-6 col">
			<a href="index.php"><img src="assets/img/placeholder/logo-header.png" alt="" /></a>
		</div>

		<!-- ## SITE NAVIGATION ## -->
		<nav id="qcPriNav" class="col-6 col">
			<ul class="clearfix">
				<li><a href="http://inhaiti.net" target="_blank"><i class="icon-calendar-2 icon"></i> <span>+ D'INFOS</span></a></li>
				<li class="current"><a href="inscription.php"><i class="icon-ticket icon"></i> <span>Inscription</span></a></li>
			</ul>
		</nav>

	</div>
</header>
<!-- ## HEADER END ## -->


<!-- ## CONTENT WRAPPER ## -->
<div id="qcContentWrapper" class="image-container set-full-height" style="background-image: url('assets/img/bg-empty.jpg');background-size:cover">

	    <!--   Big container   -->
	    <div class="container">
				<div class="row">
					<div class="col-sm-12 ">
						<!--      Wizard container        -->
						<div class="wizard-container">
							<div class="card wizard-card" data-color="green" id="wizardProfile">
								<form action="" method="" id="form-general">
							<!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
	
									<div class="wizard-header">
										<h3 class="wizard-title">
										Inscription à la chaîne de prière
										</h3>
										<h5>Formulaire d'inscription à la chaîne de prière pour Haïti.</h5>
									</div>
									<div class="wizard-navigation">
										<ul>
											<li><a href="#info" role="tab" data-toggle="tab">Informations générales</a></li>
											<li><a href="#tps_priere" role="tab" data-toggle="tab">Temps de prière</a></li>
											<li><a href="#final" role="tab" data-toggle="tab">FINALISER inscription</a></li>
										</ul>
									</div>
	
									<div class="tab-content">
										<div class="tab-pane" id="info">
										  	<div class="row">
												<h4 class="info-text"> Veuillez saisir S.V.P vos informations personnelles</h4>
												<div class="col-sm-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">face</i>
														</span>
														<div class="form-group label-floating">
														  <label class="control-label">Nom <small>(requis)</small></label>
														  <input name="nom" id="nom" type="text" class="form-control">
														</div>
													</div>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">face</i>
														</span>
														<div class="form-group label-floating">
														  <label class="control-label">Prénoms <small>(requis)</small></label>
														  <input name="prenom" id="prenom" type="text" class="form-control">
														</div>
													</div>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">map</i>
														</span>
														<div class="form-group label-floating">
														<label class="control-label">Pays</label>
															<select name="pays" id="pays" class="form-control">
																<option value=""> </option>
																<option value="Afghanistan">Afghanistan </option>
																<option value="Afrique Centrale">Afrique Centrale </option>
																<option value="Afrique du Sud">Afrique du Sud </option> 
																<option value="Albanie">Albanie </option>
																<option value="Algerie">Algerie </option>
																<option value="Allemagne">Allemagne </option>
																<option value="Andorre">Andorre </option>
																<option value="Angola">Angola </option>
																<option value="Anguilla">Anguilla </option>
																<option value="Arabie Saoudite">Arabie Saoudite </option>
																<option value="Argentine">Argentine </option>
																<option value="Armenie">Armenie </option> 
																<option value="Australie">Australie </option>
																<option value="Autriche">Autriche </option>
																<option value="Azerbaidjan">Azerbaidjan </option>
																<option value="Bahamas">Bahamas </option>
																<option value="Bangladesh">Bangladesh </option>
																<option value="Barbade">Barbade </option>
																<option value="Bahrein">Bahrein </option>
																<option value="Belgique">Belgique </option>
																<option value="Belize">Belize </option>
																<option value="Benin">Benin </option>
																<option value="Bermudes">Bermudes </option>
																<option value="Bielorussie">Bielorussie </option>
																<option value="Bolivie">Bolivie </option>
																<option value="Botswana">Botswana </option>
																<option value="Bhoutan">Bhoutan </option>
																<option value="Boznie Herzegovine">Boznie Herzegovine </option>
																<option value="Brésil">Brésil </option>
																<option value="Brunei">Brunei </option>
																<option value="Bulgarie">Bulgarie </option>
																<option value="Burkina Faso">Burkina Faso </option>
																<option value="Burundi">Burundi </option>
																<option value="Caiman">Caiman </option>
																<option value="Cambodge">Cambodge </option>
																<option value="Cameroun">Cameroun </option>
																<option value="Canada">Canada </option>
																<option value="Canaries">Canaries </option>
																<option value="CapVert">Cap Vert </option>
																<option value="Chili">Chili </option>
																<option value="Chine">Chine </option> 
																<option value="Chypre">Chypre </option> 
																<option value="Colombie">Colombie </option>
																<option value="Comores">Colombie </option>
																<option value="Congo">Congo </option>
																<option value="Congo_democratique">Congo Démocratique </option>
																<option value="Cook">Cook </option>
																<option value="Coree du Nord">Coree du Nord </option>
																<option value="Coree_du_Sud">Coree du Sud </option>
																<option value="Costa Rica">Costa Rica </option>
																<option value="Côte d&apos;Ivoire">Côte d'Ivoire </option>
																<option value="Croatie">Croatie </option>
																<option value="Cuba">Cuba </option>
																<option value="Danemark">Danemark </option>
																<option value="Djibouti">Djibouti </option>
																<option value="Dominique">Dominique </option>
																<option value="Egypte">Egypte </option> 
																<option value="Emirats Arabes Unis">Emirats Arabes Unis </option>
																<option value="Equateur">Equateur </option>
																<option value="Erythree">Erythree </option>
																<option value="Espagne">Espagne </option>
																<option value="Estonie">Estonie </option>
																<option value="Etats Unis">Etats Unis </option>
																<option value="Ethiopie">Ethiopie </option>
																<option value="Falkland">Falkland </option>
																<option value="Feroe">Feroe </option>
																<option value="Fidji">Fidji </option>
																<option value="Finlande">Finlande </option>
																<option value="France">France </option>
																<option value="Gabon">Gabon </option>
																<option value="Gambie">Gambie </option>
																<option value="Georgie">Georgie </option>
																<option value="Ghana">Ghana </option>
																<option value="Gibraltar">Gibraltar </option>
																<option value="Grece">Grece </option>
																<option value="Grenade">Grenade </option>
																<option value="Groenland">Groenland </option>
																<option value="Guadeloupe">Guadeloupe </option>
																<option value="Guam">Guam </option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guernesey">Guernesey </option>
																<option value="Guinee">Guinee </option>
																<option value="Guinée Bissau">Guinee_Bissau </option>
																<option value="Guinée Equatoriale">Guinée Equatoriale </option>
																<option value="Guyana">Guyana </option>
																<option value="Guyane Francaise ">Guyane Francaise </option>
																<option value="Haïti">Haïti </option>
																<option value="Hawaii">Hawaii </option> 
																<option value="Honduras">Honduras </option>
																<option value="Hong Kong">Hong Kong </option>
																<option value="Hongrie">Hongrie </option>
																<option value="Inde">Inde </option>
																<option value="Indonesie">Indonesie </option>
																<option value="Iran">Iran </option>
																<option value="Iraq">Iraq </option>
																<option value="Irlande">Irlande </option>
																<option value="Islande">Islande </option>
																<option value="Israel">Israel </option>
																<option value="Italie">italie </option>
																<option value="Jamaique">Jamaique </option>
																<option value="Jan Mayen">Jan Mayen </option>
																<option value="Japon">Japon </option>
																<option value="Jersey">Jersey </option>
																<option value="Jordanie">Jordanie </option>
																<option value="Kazakhstan">Kazakhstan </option>
																<option value="Kenya">Kenya </option>
																<option value="Kirghizstan">Kirghizistan </option>
																<option value="Kiribati">Kiribati </option>
																<option value="Koweit">Koweit </option>
																<option value="Laos">Laos </option>
																<option value="Lesotho">Lesotho </option>
																<option value="Lettonie">Lettonie </option>
																<option value="Liban">Liban </option>
																<option value="Liberia">Liberia </option>
																<option value="Liechtenstein">Liechtenstein </option>
																<option value="Lituanie">Lituanie </option> 
																<option value="Luxembourg">Luxembourg </option>
																<option value="Lybie">Lybie </option>
																<option value="Macao">Macao </option>
																<option value="Macedoine">Macedoine </option>
																<option value="Madagascar">Madagascar </option>
																<option value="Madère">Madère </option>
																<option value="Malaisie">Malaisie </option>
																<option value="Malawi">Malawi </option>
																<option value="Maldives">Maldives </option>
																<option value="Mali">Mali </option>
																<option value="Malte">Malte </option>
																<option value="Man">Man </option>
																<option value="Mariannes du Nord">Mariannes du Nord </option>
																<option value="Maroc">Maroc </option>
																<option value="Marshall">Marshall </option>
																<option value="Martinique">Martinique </option>
																<option value="Maurice">Maurice </option>
																<option value="Mauritanie">Mauritanie </option>
																<option value="Mayotte">Mayotte </option>
																<option value="Mexique">Mexique </option>
																<option value="Micronesie">Micronesie </option>
																<option value="Midway">Midway </option>
																<option value="Moldavie">Moldavie </option>
																<option value="Monaco">Monaco </option>
																<option value="Mongolie">Mongolie </option>
																<option value="Montserrat">Montserrat </option>
																<option value="Mozambique">Mozambique </option>
																<option value="Namibie">Namibie </option>
																<option value="Nauru">Nauru </option>
																<option value="Nepal">Nepal </option>
																<option value="Nicaragua">Nicaragua </option>
																<option value="Niger">Niger </option>
																<option value="Nigéria">Nigéria </option>
																<option value="Niue">Niue </option>
																<option value="Norfolk">Norfolk </option>
																<option value="Norvege">Norvege </option>
																<option value="Nouvelle Caledonie">Nouvelle Caledonie </option>
																<option value="Nouvelle Zélande">Nouvelle Zélande </option>
																<option value="Oman">Oman </option>
																<option value="Ouganda">Ouganda </option>
																<option value="Ouzbekistan">Ouzbekistan </option>
																<option value="Pakistan">Pakistan </option>
																<option value="Palau">Palau </option>
																<option value="Palestine">Palestine </option>
																<option value="Panama">Panama </option>
																<option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée </option>
																<option value="Paraguay">Paraguay </option>
																<option value="Pays Bas">Pays Bas </option>
																<option value="Pérou">Pérou </option>
																<option value="Philippines">Philippines </option> 
																<option value="Pologne">Pologne </option>
																<option value="Polynesie">Polynesie </option>
																<option value="Porto_Rico">Porto Rico </option>
																<option value="Portugal">Portugal </option>
																<option value="Qatar">Qatar </option>
																<option value="République Dominicaine">République Dominicaine </option>
																<option value="Republique Tchèque">Republique Tchèque </option>
																<option value="Réunion">Réunion </option>
																<option value="Roumanie">Roumanie </option>
																<option value="Royaume Uni">Royaume Uni </option>
																<option value="Russie">Russie </option>
																<option value="Rwanda">Rwanda </option>
																<option value="Sahara Occidental">Sahara Occidental </option>
																<option value="Sainte Lucie">Sainte Lucie </option>
																<option value="Saint Marin">Saint Marin </option>
																<option value="Salomon">Salomon </option>
																<option value="Salvador">Salvador </option>
																<option value="Samoa Occidentales">Samoa Occidentales</option>
																<option value="Samoa Americaine">Samoa Americaine </option>
																<option value="Sao Tome et Principe">Sao Tome et Principe </option> 
																<option value="Sénégal">Sénégal </option> 
																<option value="Seychelles">Seychelles </option>
																<option value="Sierra Léone">Sierra Léone </option>
																<option value="Singapour">Singapour </option>
																<option value="Slovaquie">Slovaquie </option>
																<option value="Slovénie">Slovénie</option>
																<option value="Somalie">Somalie </option>
																<option value="Soudan">Soudan </option> 
																<option value="Sri_Lanka">Sri Lanka </option> 
																<option value="Suede">Suède </option>
																<option value="Suisse">Suisse </option>
																<option value="Surinam">Surinam </option>
																<option value="Swaziland">Swaziland </option>
																<option value="Syrie">Syrie </option>
																<option value="Tadjikistan">Tadjikistan </option>
																<option value="Taiwan">Taiwan </option>
																<option value="Tonga">Tonga </option>
																<option value="Tanzanie">Tanzanie </option>
																<option value="Tchad">Tchad </option>
																<option value="Thailande">Thailande </option>
																<option value="Tibet">Tibet </option>
																<option value="Timor_Oriental">Timor Oriental </option>
																<option value="Togo">Togo </option> 
																<option value="Trinite_et_Tobago">Trinite et Tobago </option>
																<option value="Tristan da cunha">Tristan de cuncha </option>
																<option value="Tunisie">Tunisie </option>
																<option value="Turkmenistan">Turmenistan </option> 
																<option value="Turquie">Turquie </option>
																<option value="Ukraine">Ukraine </option>
																<option value="Uruguay">Uruguay </option>
																<option value="Vanuatu">Vanuatu </option>
																<option value="Vatican">Vatican </option>
																<option value="Vénézuela">Vénézuela </option>
																<option value="Vièrges Americaines">Vièrges Americaines </option>
																<option value="Vièrges Britanniques">Vièrges Britanniques </option>
																<option value="Viêtnam">Viêtnam </option>
																<option value="Wake">Wake </option>
																<option value="Wallis et Futuma">Wallis et Futuma </option>
																<option value="Yémen">Yémen </option>
																<option value="Yougoslavie">Yougoslavie </option>
																<option value="Zambie">Zambie </option>
																<option value="Zimbabwe">Zimbabwe </option>
															</select>
														</div>
													</div>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">email</i>
														</span>
														<div class="form-group label-floating">
															<label class="control-label">Email <small>(requis)</small></label>
															<input name="email" id="email" type="email" class="form-control">
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">home</i>
														</span>
														<div class="form-group label-floating">
														<label class="control-label">Commuanauté réligieuse</label>
															<select name="eglise" id="eglise" class="form-control">
																<option value=""></option>
																<option value="Vases d&apos;Honneur">Vases d'Honneur </option>
																<option value="Impact Centre Chrétien">Impact Centre Chrétien </option>
																<option value="Tabernacle of Glory">Tabernacle of Glory </option> 
																<option value=" ">Autre </option> 
															</select>
														</div>
													</div>
													
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">home</i>
														</span>
														<div class="form-group label-floating">
														  <label class="control-label">Si autre précisez SVP <small></small></label>
														  <input name="eglise_autre" id="eglise_autre" type="text" class="form-control">
														</div>
													</div>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">email</i>
														</span>
														<div class="form-group label-floating">
															<label class="control-label">Adresse postal <small></small></label>
															<input name="adresse" id="adresse" type="text" class="form-control">
														</div>
													</div>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">phone</i>
														</span>
														<div class="form-group label-floating">
															<!--<label class="control-label">Contact téléphone<small></small></label>-->
															<input name="tel" id="tel" type="tel" class="form-control">
															<input type="hidden" name="phonefull" id="phonefull" />
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tps_priere">
											<h4 class="info-text"> Sélectionnez une date de prière</h4>
											<div class="info-warning"><i class="fa fa-info-circle"></i> Fuseau horaire Temps universel(UTC/GMT) | Cliquez sur suivant pour continuer le processus d'inscription.</div>
											<div class="row">
												<div class="col-sm-12 col-md-12 time_title_h">
													<h4 class="time_title">Temps de Prière 1:  <span>Action de grâce</span> | <strong>dimanche 01 octobre au mardi 10 octobre.</strong></h4>
												</div>
												<div class="col-sm-12 col-md-12">
												
														<div class="calendar_container_all">
																<!-- days -->
																<div class="days_container_all" id="calendar_container">
																	<?php
																	for ($i = 1; $i <= 10; $i++) {	
																		echo ""?>
																		<div class="day_container day_white" id="jour">
																			<div id="view_group">
																			<a href="#Modal_view<?php echo $i;?>" data-sfid='"<?php echo $i;?>"' data-toggle="modal" data-tooltip="tooltip" title="Cliquer pour choisir une plage de prière" type="button" class="">
																			<i class="fa fa-calendar"></i>
																				<div class="day_date">
																				
																				<?php 
																					echo $date_string = strftime( " %a %d %b", strtotime('2017-09-30 + '.$i.' days') );																	
																				?>
																				</div>
																				<div class="day_book">
																					 Jour <?php echo $i;?>
																				</div>
																				<div class="num_sub">
																				<?php $date_get = strftime( " %Y-%m-%d", strtotime('2017-09-30 + '.$i.' days') );
																					// $date_get = $date_2;
																					$result = mysql_query("
																					SELECT DATE(date_priere)
																					FROM app_bd.priere
																					WHERE DATE(date_priere)='".$date_get."'
																					UNION
																					SELECT DATE(date_priere)
																					FROM app_bd.inscription
																					WHERE DATE(date_priere)='".$date_get."'");

																						$num_rows = mysql_num_rows($result);
																						echo $num_rows," inscrits";
																					?>
																				</div>
																			</a>
																				<!-- Modal-->
																				<div class="modal fade" id="Modal_view<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true" target="<?php echo $i; ?>">
																				  <div class="modal-dialog">
																				  <form id="form_tmp">
																					<div class="modal-content modal-no-shadow modal-no-border">
																					  <div class="modal-header bg-primary no-border">
																						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																						<h4 class="modal-title">Sélectionnez votre temps de prière | Jour <?php echo $i;?> | <?php echo $date_string = strftime( " %a %d %b", strtotime('2017-09-30 + '.$i.' days') );?></h4>
																					  </div>
																					  <div class="modal-body">
																							<div class="input-group clockpicker">
																								<div class="form-group label-floating col-md-6 col-sm-6 col-lg-6 col-xs-6 upc">
																								Heure de début
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_debut.php'); ?>
																								</div>
																								<div class="form-group label-floating col-md-6 col-sm-6 col-lg-6 col-xs-6 upc">
																								Heure de fin
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_fin.php');?> 
																								</div>
																								
																								<input type="hidden" name="date_priere" id="date_priere" value="<?php $date_2 = new DateTime('29-09-2017'); $date_2->modify('+1 day'); echo $date_2->format('Y:m:d');?>"/>
																							</div>
																					  </div>
																					  <div class="modal-footer">
																						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
																							<div class="result_modal"></div>
																						</div>
																						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
																							<input type="button" class="btn btn-default" data-dismiss="modal" id="tmp_modal_cancel" value="Annuler"/>
																							<input type="button" class="btn btn-success" id="tmp_modal_submit"  value="Valider" data-date="<?php echo $date_string = strftime( " %Y-%m-%d", strtotime('2017-09-30 + '.$i.' days') );?>">
																						</div>
																					  </div>
																					</div>
																					</form>
																				  </div>
																				</div>
																			</div>
																		</div>
																	<?php "";}?>			
																</div>
															</div>
												</div>
												<div class="clearfix"></div>
												
												<div class="col-sm-12 col-md-12 time_title_h">
													<h4 class="time_title">Temps de Prière 2: <span>Combat spirituel</span> | <strong>Mercredi 11 octobre au mardi 20 octobre.</strong></h4>
												</div>
												<div class="col-sm-12 col-md-12">
														<div class="calendar_container_all">
																<!-- days -->
																<div class="days_container_all" id="calendar_container">
																	<?php
																	for ($i = 1; $i <= 10; $i++) {	
																		echo ""?>
																		<div class="day_container day_white" id="jour">
																			<div id="view_group">
																			<a href="#Modal_view_2<?php echo $i;?>" data-sfid='"<?php echo $i;?>"' data-toggle="modal" data-tooltip="tooltip" title="Aperçu de la demande" type="button" class="">
																				<i class="fa fa-calendar"></i>
																				<div class="day_date">
																				<?php 
																					echo $date_string = strftime( " %a %d %b", strtotime('2017-10-10 + '.$i.' days') );																	
																				?>
																				</div>
																				<div class="day_book">
																					Jour <?php echo $i;?>
																				</div>
																				<div class="num_sub">
																				<?php $date_get = strftime( " %Y-%m-%d", strtotime('2017-10-10 + '.$i.' days') );
																					// $date_get = $date_2;
																						$result = mysql_query("SELECT * FROM priere where DATE(date_priere)='".$date_get."'");
																						$num_rows = mysql_num_rows($result);
																						echo $num_rows," inscrits";
																					?>
																				</div>
																			</a>
																				<!-- Modal-->
																				<div class="modal fade" id="Modal_view_2<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true" target="<?php echo $i; ?>">
																				  <div class="modal-dialog">
																				  <form id="form_tmp">
																					<div class="modal-content modal-no-shadow modal-no-border">
																					  <div class="modal-header bg-primary no-border">
																						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																						<h4 class="modal-title">Sélectionnez votre temps de prière | Jour <?php echo $i;?> | <?php echo $date_string = strftime( " %a %d %b", strtotime('2017-10-10 + '.$i.' days') );?></h4>
																					  </div>
																					  <div class="modal-body">
																							
																							<div class="input-group clockpicker col-md-12">
																								
																								<div class="form-group label-floating col-md-6 upc">
																								Heure de début
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_debut.php');?>
																								</div>
																								<div class="form-group label-floating col-md-6 upc">
																								Heure de fin
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_fin.php');?>
																								</div>
																								
																								<input type="hidden" name="date_priere" id="date_priere" value="<?php $date_2 = new DateTime('2017-10-10'); $date_2->modify('+1 day'); echo $date_2->format('Y:m:d');?>"/>
																							</div>
																					  </div>
																					  <div class="modal-footer">
																						<div class="col-sm-6">
																							<div class="result_modal pull-left"></div>
																						</div>
																						<div class="col-sm-6 col-md-6">
																							<input type="button" class="btn btn-default" data-dismiss="modal" id="tmp_modal_cancel" value="Annuler"/>
																							<input type="button" class="btn btn-success" id="tmp_modal_submit" value="Valider" data-date="<?php echo $date_string = strftime( " %Y-%m-%d", strtotime('2017-10-10 + '.$i.' days') );?>">
																						</div>
																					  </div>
																					</div>
																					</form>
																				  </div>
																				</div>
																			</div>
																		</div>
																	<?php "";}?>			
																</div>
															</div>
												</div>
												<div class="clearfix"></div>
												<!--Temps 3-->
												<div class="col-sm-12 col-md-12 time_title_h">
													<h4 class="time_title">Temps de Prière 3: <span>Intercession</span> | <strong>Samedi 21 octobre au mardi 30 octobre.</strong></h4>
												</div>
												<div class="col-sm-12 col-md-12">
														<div class="calendar_container_all">
																<!-- days -->
																<div class="days_container_all" id="calendar_container">
																	<?php
																	for ($i = 1; $i <= 10; $i++) {	
																		echo ""?>
																		<div class="day_container day_white" id="jour">
																			<div id="view_group">
																			<a href="#Modal_view_3<?php echo $i;?>" data-sfid='"<?php echo $i;?>"' data-toggle="modal" data-tooltip="tooltip" title="Aperçu de la demande" type="button" class="">
																				<i class="fa fa-calendar"></i>
																				<div class="day_date">
																				<?php 
																					echo $date_string = strftime( " %a %d %b", strtotime('2017-10-20 + '.$i.' days') );																	
																				?>
																				</div>
																				<div class="day_book">
																					Jour <?php echo $i;?>
																				</div>
																				<div class="num_sub">
																				<?php $date_get = strftime( " %Y-%m-%d", strtotime('2017-10-20 + '.$i.' days') );
																					// $date_get = $date_2;
																						$result = mysql_query("SELECT * FROM priere where DATE(date_priere)='".$date_get."'");
																						$num_rows = mysql_num_rows($result);
																						echo $num_rows," inscrits";
																					?>
																				</div>
																			</a>
																				<!-- Modal-->
																				<div class="modal fade" id="Modal_view_3<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true" target="<?php echo $i; ?>">
																				  <div class="modal-dialog">
																				  <form id="form_tmp">
																					<div class="modal-content modal-no-shadow modal-no-border">
																					  <div class="modal-header bg-primary no-border">
																						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																						<h4 class="modal-title">Sélectionnez votre temps de prière | Jour <?php echo $i;?> | <?php echo $date_string = strftime( " %a %d %b", strtotime('2017-10-20 + '.$i.' days') );?></h4>
																					  </div>
																					  <div class="modal-body">
																							
																							<div class="input-group clockpicker col-md-12">
																								
																								<div class="form-group label-floating col-md-6 upc">
																								Heure de début
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_debut.php');?>
																								</div>
																								<div class="form-group label-floating col-md-6 upc">
																								Heure de fin
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_fin.php');?>
																								</div>
																								
																								<input type="hidden" name="date_priere" id="date_priere" value="<?php $date_2 = new DateTime('2017-10-20'); $date_2->modify('+1 day'); echo $date_2->format('Y:m:d');?>"/>
																							</div>
																					  </div>
																					  <div class="modal-footer">
																						<div class="col-sm-6">
																							<div class="result_modal pull-left"></div>
																						</div>
																						<div class="col-sm-6 pull-right">
																							<input type="button" class="btn btn-default" data-dismiss="modal" id="tmp_modal_cancel" value="Annuler"/>
																							&nbsp;
																							<input type="button" class="btn btn-success" id="tmp_modal_submit"  value="Valider" data-date="<?php echo $date_string = strftime( " %Y-%m-%d", strtotime('2017-10-20 + '.$i.' days') );?>">
																						</div>
																					  </div>
																					</div>
																					</form>
																				  </div>
																				</div>
																			</div>
																		</div>
																	<?php "";}?>			
																</div>
															</div>
												</div>
												<div class="clearfix"></div>
												
												<!--Temps 4-->
												<div class="col-sm-12 col-md-12 time_title_h">
													<h4 class="time_title">Temps de Prière 4: <span>Proclamations prophétiques</span> | <strong>Mardi 31 octobre au jeudi 09 novembre.</strong></h4>
												</div>
												<div class="col-sm-12 col-md-12">
														<div class="calendar_container_all">
																<!-- days -->
																<div class="days_container_all" id="calendar_container">
																	<?php
																	for ($i = 1; $i <= 10; $i++) {	
																		echo ""?>
																		<div class="day_container day_white" id="jour">
																			<div id="view_group">
																			<a href="#Modal_view_4<?php echo $i;?>" data-sfid='"<?php echo $i;?>"' data-toggle="modal" data-tooltip="tooltip" title="Aperçu de la demande" type="button" class="">
																				<i class="fa fa-calendar"></i>
																				<div class="day_date">
																				<?php 
																					echo $date_string = strftime( " %a %d %b", strtotime('2017-10-30 + '.$i.' days') );																	
																				?>
																				</div>
																				<div class="day_book">
																					Jour <?php echo $i;?>
																				</div>
																				<div class="num_sub">
																				<?php $date_get = strftime( " %Y-%m-%d", strtotime('2017-10-30 + '.$i.' days') );
																					// $date_get = $date_2;
																						$result = mysql_query("SELECT * FROM priere where DATE(date_priere)='".$date_get."'");
																						$num_rows = mysql_num_rows($result);
																						echo $num_rows," inscrits";
																					?>
																				</div>
																			</a>
																				<!-- Modal-->
																				<div class="modal fade" id="Modal_view_4<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true" target="<?php echo $i; ?>">
																				  <div class="modal-dialog">
																				  <form id="form_tmp">
																					<div class="modal-content modal-no-shadow modal-no-border">
																					  <div class="modal-header bg-primary no-border">
																						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																						<h4 class="modal-title">Sélectionnez votre temps de prière | Jour <?php echo $i;?> | <?php echo $date_string = strftime( " %a %d %b", strtotime('2017-10-30 + '.$i.' days') );?></h4>
																					  </div>
																					  <div class="modal-body">
																							
																							<div class="input-group clockpicker col-md-12">
																								
																								<div class="form-group label-floating col-md-6 upc">
																								Heure de début
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_debut.php');?>
																								</div>
																								<div class="form-group label-floating col-md-6 upc">
																								Heure de fin
																								<br/>
																								<br/>
																									<?php include('includes/heures_priere_fin.php');?>
																								</div>
																								
																								<input type="hidden" name="date_priere" id="date_priere" value="<?php $date_2 = new DateTime('2017-10-30'); $date_2->modify('+1 day'); echo $date_2->format('Y:m:d');?>"/>
																							</div>
																					  </div>
																					  <div class="modal-footer">
																						<div class="col-sm-6">
																							<div class="result_modal pull-left"></div>
																						</div>
																						<div class="col-sm-6 pull-right">
																							<input type="button" class="btn btn-default" data-dismiss="modal" id="tmp_modal_cancel" value="Annuler"/>
																							&nbsp;
																							<input type="button" class="btn btn-success" id="tmp_modal_submit"  value="Valider" data-date="<?php echo $date_string = strftime( " %Y-%m-%d", strtotime('2017-10-30+ '.$i.' days') );?>">
																						</div>
																					  </div>
																					</div>
																					</form>
																				  </div>
																				</div>
																			</div>
																		</div>
																	<?php "";}?>			
																</div>
															</div>
												</div>
												<div class="clearfix"></div>
												
											</div>
										</div>
										<div class="final tab-pane" id="final">
											<div class="row">
												<div class="col-sm-12">
													<h4 class="info-text"> Résumé de votre inscrption</h4>
													<div class="info-warning"><i class="fa fa-info-circle"></i> Cliquez sur le boutton TERMINER pour enregistrer vos informations</div>
												</div>
												<div class="col-sm-6 col-md-6" id="table_get_info"></div>
												<div class="col-sm-6 col-md-6" id="table_get_data">
												</div>
											</div>
										</div>
									</div>
										<div id="result_save_2" style=""></div>
										<div class="clearfix"></div>
									<div class="wizard-footer">
										<div class="pull-right col-md-6 col-xs-6">
											<input type='button'  class='btn btn-next btn-fill btn-success btn-wd pull-right top' name='next' value='Suivant' />
											<input type='button' id="save-info" class='btn btn-finish btn-fill btn-success btn-wd pull-right' name='finish' value='Terminer' />
										</div>
										<div class="pull-left col-md-6 col-xs-6">
											<input type='button' class='btn btn-previous btn-fill btn-default btn-wd pull-left top' name='previous' value='Précédent' />
										</div>
										<div class="clearfix"></div>
									</div>
								</form>
							</div>
						</div> <!-- wizard container -->
					</div>
				</div><!-- end row -->
			</div> <!--  big container -->
</div>
<!-- ## CONTENT WRAPPER END ## -->


<!-- ## FOOTER ## -->
<?php include 'includes/footer.php' ?>
<!-- ## FOOTER END ## -->

<!-- ## LOAD JAVASCRIPTS ## -->
<script src="assets/js/2.1.1.jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-clockpicker.min.js" type="text/javascript" ></script>
<!--  Plugin for the Wizard -->
<script src="assets/js/material-bootstrap-wizard.js"></script>
<script type="text/javascript"> 
$('#input-debut').clockpicker({
    template: 'modal',
	autoclose: true
});
$('#input-fin').clockpicker({
    template: 'modal',
	autoclose: true	
});
</script>

  <script src="assets/js/tel/intlTelInput.js"></script>
  <script>
    $("#tel").intlTelInput({
       allowDropdown: true,
      autoHideDialCode: false,
       autoPlaceholder: "on",
       // dropdownContainer: "body",
      <!-- excludeCountries: ["us"], -->
      formatOnDisplay: true,
      geoIpLookup: function(callback) {
        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          callback(countryCode);
        });
      },
      hiddenInput: "phonefull",
       initialCountry: "ci",
      nationalMode: true,
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      placeholderNumberType: "MOBILE",
      preferredCountries: ['ci', 'fr', 'us', 'ca', 'ht'],
      separateDialCode: true,
      utilsScript: "assets/js/tel/utils.js"
    });
	
  </script>

<script>
$('.top').click(function() {
    $('body,html').animate({
        scrollTop : 60                   
    }, 1000);
});
</script>
<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/inscription.js"></script>
<script src="assets/js/tmp_priere.js"></script>
</body>


</html>