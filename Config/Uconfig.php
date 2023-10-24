<?php

class UserConfig {

    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "user";
    public $con_res;

    public function connect() {
        $this->con_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $this->con_res;
    }

    public function insert($name,$email,$password) {
        $this->connect();

        $hash_pass = password_hash($password,PASSWORD_DEFAULT);

        $qry="INSERT INTO users(name,email,password) VALUES('$name','$email','$hash_pass');";
        $res = mysqli_query($this->con_res,$qry); //boolean
        return $res;
    }
}

?>