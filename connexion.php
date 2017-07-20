<?php

    header("Access-Control-Allow-Origin: *");
    header('Content-type: application/json');
    require "connect.php";

    if(isset($_POST["login"], $_POST["mdp"])){
        $connex = new Connect();
        echo json_encode($connex->read($_POST["login"], $_POST["mdp"]));
    }