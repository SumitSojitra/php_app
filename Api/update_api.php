<?php
    include("../Config/config.php");
    header("Access-Control-Allow-Method:PUT");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'PUT'){

    }else{
        $arr['error'] = "Only PUT HTTP Method are allowed...";
    }

        echo json_encode($arr);
?>,