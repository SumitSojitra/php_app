<?php

include("../Config/config.php");
header("Access-Control-Allow-Methods: DELETE");


$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    $input = file_get_contents("php://input");
    parse_str($input,$_DELETE);
    $id = $_DELETE['id'];
  
    $res = $config->delete($id);
  
    if($res) {
      $arr['status'] = "Record Deleted Successfully...";
    }else{
      
      $arr['status'] = "Record Deleted failed...";
    }
  

}else{
    $arr['rerror'] = "Only DELETE HTTP Methods are Allowed....";
}
// echo "skdfnbhj";
echo json_encode($arr);

?>