<?php

    class Connectio{
        public function dbConnect(){
            return new PDO("mysql:host=localhost; dbname=Login", "root", "");
        }
    }
