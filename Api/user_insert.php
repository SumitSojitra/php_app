<?php

include("../Config/Uconfig.php");
header("Access-Control-Allow-Merhods:POST");
    

    $config = new UserConfig();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $res = $config->insert($name,$email,$password);
    
        if($res){
            $arr['data'] = "Record Inserted Successfully....";
        }else{
            $arr['data'] = "Record Insertion Failed....";   
        }
    }
    else{
        $arr['error'] = "Only POST HTTP Method is Allowed./";
    }
    echo json_encode($arr);
?>