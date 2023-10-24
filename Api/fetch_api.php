<?php

header("Access-Control-Allow-Methods: GET");
include("../Config/config.php");

$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  
    $obj = $config->fetch();

    $all_data = [];

    while($record = mysqli_fetch_assoc($obj)){
        array_push($all_data,$record);
    }

    $arr['students'] = $all_data;


}else{
    $arr['rerror'] = "Only GET HTTP Methods are Allowed....";
}
// echo "skdfnbhj";
echo json_encode($arr);

?>