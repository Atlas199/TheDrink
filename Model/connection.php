<?php

include_once "Model/config.php";

class Connection {
    private $std;
    public function __construct() {
        $this->std = "mysql:dbname=".DB_NAME;
    }
    public function openConnection(){
        try{
            $db = new PDO($this->std, DB_USER, DB_PASSWORD);
            return $db;
        } catch (PDOException $ex) {
            error_log("DATABASE ERROR:".$ex->getMessage());
        }
    }
}
