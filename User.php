<?php

include 'connection.php';
class User{
    private $db;
    public function __construct() {
        $this->db = new Connection();
        $this->db = $this->db->dbConnect();
    }

    public function Login($name, $pass) {
        if(!empty($name) && !empty($pass)) {
            $st = $this->db->prepare("SELECT * FROM users WHERE name=? and pass?");
            $st->bindParam(1, $name);
            $st->bindParam(2, $pass);
            $st->execute();

            if($st->rowCount() == 1) {
                echo "User verified, Access granted!";
            }else {
                echo "Incorrect Username or Password";
            }

        }else {
            echo "Please enter username and password";
        }
    }
}
