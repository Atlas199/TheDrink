<?php
require_once "Model/connection.php";

class Products{
    
    public $name_prod;
    public $price;
    public $type;
    public $pais;
    public $tipo_prod;
    public $description;
    public $image;
    private $id_prod;
    
    /**
     * Constructor class Products
     *
     * @param string $name_prod
     * @param string $price
     * @param string $type
     * @param string $pais
     * @param string $tipo_prod
     * @param string descriptio
     * @param string image
     *  @param string $id_prod
     */

    public function __construct( $name_prod = "", $price = "", $type = "", $pais = "", $tipo_prod = "", $description = "", $image = "", $id_prod = 0) {
        $this->name_prod = $name_prod;
        $this->price = $price;
        $this->type = $type;
        $this->pais = $pais;
        $this->tipo_prod = $tipo_prod;
        $this->description = $description;
        $this->image = $image;
        $this->id_prod = $id_prod;
    }
    
    public function insert(){
        try{
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "INSERT INTO products (name_prod, price, type, pais, tipo_prod, description, image) VALUES"
                    . "( '".$this->name_prod."', '".$this->price."', '".$this->type."', '".$this->pais."', '".$this->tipo_prod."', '".$this->description."', '".$this->image."' )";
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
    }

   

    public function select($id_prod = 0){
        $rows = [];
        try{
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "SELECT * FROM products";
            if($id_prod){
                $sql .= " WHERE id_prod=".$id_prod;
            }
            $result = $db->query($sql);
            while($row = $result->fetch()){
                $rows[] =  new Products( $row['name_prod'], $row['price'], $row['type'], $row['pais'], $row['tipo_prod'], $row['description'], $row['image'], $row['id_prod']);
            }
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return $rows;
    }

    public function selectprod($name_prod = ""){
        $rows = [];
        try {
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "SELECT * FROM products";
            if($name_prod){
                $sql .= " WHERE name_prod LIKE '$name_prod'";   
            }
            $result = $db->query($sql);
            while($row = $result->fetch()){
                $rows[] = new Products($row['name_prod'], $row['price'], $row['type'], $row['pais'], $row['tipo_prod'], $row['description'], $row['image'], $row['id_prod']);
            }
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":".$ex->getTraceAsString());
        }
        return $rows;
    }
    
    public function delete($id_prod = 0){
        try {
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "DELETE FROM products WHERE id_prod =". $id_prod;
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
    }

    public function update(){
        try{
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "UPDATE products SET name_prod='".$this->name_prod."', price = '".$this->price."', type = '".$this->type."', pais = '".$this->pais."', tipo_prod = '".$this->tipo_prod."', description = '".$this->description."', "
                    ." image = '".$this->image."' WHERE id_prod = '".$this->id_prod."'";       
            return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
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
