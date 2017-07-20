<?php

    header("Access-Control-Allow-Origin: *");
    header('Content-type: application/json')
    require "connect.php";

    if(isset($_POST["id"])){
        $connex = new Connect();
        echo json_encode($connex->read($_POST["id"]));
    }