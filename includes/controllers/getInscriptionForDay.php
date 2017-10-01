<?php

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
    include_once ('database.php');
}

function chargerClass($class) {
    require '/Applications/XAMPP/xamppfiles/htdocs/app_40_jours/includes/models/class/' . $class . '.php';
}

echo dirname(__FILE__);

spl_autoload_register('chargerClass');

// get Inscription by Priere
$priere = new PriereManager($db);
$allPriere = $priere->getAllPriere();
$people = [];

// $count = 0;
foreach ($allPriere as $value) {
    $inscription = new InscriptionManager($db);
    $inscriptionByMail = $inscription->getInscriptionByMail($value['email']);

    foreach ($inscriptionByMail as $inscription) {
        $people[$value['date_priere']]['data'][] =  $inscription;
        (!empty($people[$value['date_priere']]['count'])) ? $people[$value['date_priere']]['count'] += 1 : $people[$value['date_priere']]['count'] = 1;
    }
}

// get Priere by Date
$prieresByDate = $priere->getPriereByDay(date('Y-m-d'));

$relatedPriere = [];
$limiter = 2;
$counter = 0;
foreach ($prieresByDate as $singlePriere) {
    $relatedPriere[] = $singlePriere;
    if ($counter < $limiter) {
        mail($singlePriere['email'], 'Votre temps de prière débutera dans 1 heure', 'Shalom \n votre temps de prière débutera dans une heure.');
        // set notified to 1
        $priereEntity = new PriereEntity();
        $priereEntity->hydrate($singlePriere);
        $priere->notifiedPriere($priereEntity);
        $counter++;
    }
}
