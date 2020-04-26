<?php 

include_once 'Model/connection.php';

class Carrito{
    public $name_prod;
    public $price;
    public $cant;
    public $image;
    public $type;
    private $id_user;
    private $id_prod;
    private $id_carrito;

    /**
     * Constructor class Carrito
     * 
     * @param string $name_prod
     * @param string $price
     * @param string $cant
     * @param string $image
     * @param string $type
     * @param string $id_user
     * @param string $id_prod
     * @param string $id_carrito
     */

    public function __construct($name_prod = "", $price = "", $cant = "", $image = "", $type = "", $id_user = 0, $id_prod = 0, $id_carrito = 0){
        $this->name_prod = $name_prod;
        $this->price = $price;
        $this->cant = $cant;
        $this->image = $image;
        $this->type = $type;
        $this->id_user = $id_user;
        $this->id_prod = $id_prod;
        $this->id_carrito = $id_carrito;
    }

    public function insert(){
        try {
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "INSERT INTO carrito (name_prod, price, cant, image, type, id_user, id_prod) VALUES"
            . "( '".$this->name_prod."', '".$this->price."', '".$this->cant."', '".$this->image."', '".$this->type."', '".$this->id_user."', '".$this->id_prod."' )";
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
    }

   

    public function select($id_carrito = 0){
        $rows = [];
        try{
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "SELECT * FROM carrito";
            if($id_carrito){
                $sql .= " WHERE id_carrito=".$id_carrito;
            }
            $result = $db->query($sql);
            while($row = $result->fetch()){
                $rows[] =  new Carrito( $row['name_prod'], $row['price'], $row['cant'], $row['image'], $row['type'], $row['id_user'], $row['id_prod'], $row['id_carrito']);
            }
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return $rows;
    }

    public function delete($id_carrito = 0){
        try {
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = 'DELETE FROM carrito WHERE id_carrito = '.$id_carrito;
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
    }

    public function deleteCart($id_user = 0){
        try {
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = 'DELETE FROM carrito WHERE id_user ='.$id_user;
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
    }

    public function get_element($name){
        return $this->$name;
      }
    
}