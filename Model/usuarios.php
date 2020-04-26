<?php
require_once "Model/connection.php";

class Usuarios{
    
    public $username;
    public $name;
    public $last_name;
    public $age;
    public $email;
    public $rol_user;
    private $id_user;
    public $pwd;

    /**
     * Constructor class Usuarios
     *
     * @param string $username
     * @param string $name
     * @param string $last_name
     * @param string $age
     * @param string $email
     * @param string $rol_user
     * @param string $id_user
     * @param string $pwd
     */

    public function __construct($username = "", $name = "", $last_name = "", $age ="", $email = "", $rol_user = "", $id_user = 0, $pwd = "") {
        $this->username = $username;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->email = $email;
        $this->rol_user = $rol_user;
        $this->id_user = $id_user;
        $this->pwd = $pwd;
    }
    
    public function insert(){
        try{
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "INSERT INTO usuarios (username, name, last_name, age, email, rol_user, pwd) VALUES"
                    . "( '".$this->username."', '".$this->name."', '".$this->last_name."', '".$this->age."', '".$this->email."', '".$this->rol_user."', '".$this->pwd."' )";
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
    }   

    public function select($id_user = 0){
        $rows = [];
        try{
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "SELECT * FROM usuarios";
            if($id_user){
                $sql .= " WHERE id_user=".$id_user;
            }
            $result = $db->query($sql);
            while($row = $result->fetch()){
                $rows[] =  new Usuarios($row['username'], $row['name'], $row['last_name'], $row['age'], $row['email'], $row['rol_user'], $row['id_user']);
            }
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return $rows;
    }
    

    public function update(){
        try{
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "UPDATE usuarios SET username='".$this->username."', name = '".$this->name."', last_name = '".$this->last_name."', age = '".$this->age."', "
                    ." email = '".$this->email.", rol_user = '".$this->rol_user.", pwd = '".$this->pwd."' WHERE id_user = '".$this->id_user."'";       
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
    }

    public function login(){
        try{
            $connect= new Connection();
            $db = $connect->openConnection();
            $sql = "SELECT * FROM  usuarios WHERE username ='".$this->username."' AND pwd = '".$this->pwd."'";
            $result = $db->query($sql);
            while($row = $result->fetch()){                             
                return new Usuarios($row['username'], $row['name'], $row['last_name'], $row['age'], $row['email'], $row['rol_user'], $row['id_user']);
            }
        }catch (Exception $ex){
            print_r($ex);
        }
        return FALSE;
    }

    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
    }

    public function set_attribute($name, $value){
        try{
            $this->$name = $value;
        } catch (Exception $ex) {
            error_log("Error en la funcion ".__FUNCTION__." del archivo ".__FILE__. " del directorio "
                    . __DIR__. " con el siguiente mensaje ".$ex->getMessage());
        }
    }

    public function get_element($name){
        return $this->$name;
      }
}
