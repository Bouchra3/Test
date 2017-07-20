<?php
    header("Access-Control-Allow-Origin: *");
    require "connect.php";
    $connex = new Connect();
    if($_POST){
	$date = $_POST["annee"] . '-' . $_POST["mois"] . '-' .$_POST["jour"];
	$mdp = md5($_POST['mdp']);
    echo $connex->insert($_POST["prenom"],$_POST["nom"],$_POST["numero_email"],$mdp,$date,$_POST["civilite"]);
    }