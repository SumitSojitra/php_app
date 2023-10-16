<?php

header("Access-Control-Allow-Methods: POST");
include("../Config/config.php");

$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $grid = $_POST['grid'];

    $res = $config->insert($name,$course,$grid);

    if($res){
        $arr['data'] = "Record Inserted Successfully....";
    }else{
        $arr['data'] = "Record Insertion Failed....";   
    }

}else{
    $arr['rerror'] = "Only POST HTTP Methods are Allowed....";
}
// echo "skdfnbhj";
echo json_encode($arr);

?>