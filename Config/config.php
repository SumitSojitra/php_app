<?php

class Config{
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "admin";
    public $con_res;

    public function connect() {
        $this->con_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $this->con_res;
    }

    public function insert($name,$course,$grid) {
        $this->connect();
        $qry="INSERT INTO studs(name,course,grid) VALUES('$name','$course','$grid');";
        $res = mysqli_query($this->con_res,$qry); //boolean
        return $res;
    }
}
?>