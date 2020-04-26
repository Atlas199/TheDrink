<?php

include_once 'Model/connection.php';

class Historial{
    public $date;
    public $time;
    public $cantBeer;
    public $cantWine;
    public $cantDrinks;
    public $total;
    public $name;
    public $last_name;
    private $id_user;
    private $id_historial;

    /**
     * Constructor Class Historial
     * 
     * @param string $date
     * @param string $time
     * @param string $cantBeer
     * @param string $cantWine
     * @param string $cantDrink
     * @param string $total
     * @param string $name
     * @param string $last_name
     * @param string $id_user
     * @param string $id_historial
     */

     public function __construct($date = "", $time = "",  $cantBeer = "", $cantWine = "", $cantDrinks = "", $total = "", $name = "", $last_name = "", $id_user = 0, $id_historial = 0){
         $this->date = $date;
         $this->time = $time;
         $this->cantBeer = $cantBeer;
         $this->cantWine = $cantWine;
         $this->cantDrinks = $cantDrinks;
         $this->total = $total;
         $this->name = $name;
         $this->last_name = $last_name;
         $this->id_user = $id_user;
         $this->id_historial = $id_historial;
     }

     public function insert(){
         try {
             $connect = new Connection();
             $db = $connect->openConnection();
             $sql = "INSERT INTO historial (date, time, cantBeer, cantWine, cantDrinks, total, name, last_name, id_user) VALUES "
             . "('".$this->date."', '".$this->time."', '".$this->cantBeer."', '".$this->cantWine."', '".$this->cantDrinks."', '".$this->total."', '".$this->name."', '".$this->last_name."', '".$this->id_user."')";
             return $db->query($sql);
        } catch (Exception $ex) {
            error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
     }

     public function select($id_historial = 0){
         $rows = [];
         try {
            $connect = new Connection();
            $db = $connect->openConnection();
            $sql = "SELECT * FROM historial";
            if($id_historial){
                $sql = "WHERE id_historial =". $id_historial;
            }
            $result = $db->query($sql);
            while($row = $result->fetch()){
                $rows[] = new Historial($row['date'], $row['time'],  $row['cantBeer'], $row['cantWine'], $row['cantDrinks'], $row['total'], $row['name'], $row['last_name'], $row['id_user'], $row['id_historial']);
            }
         } catch (Exception $ex) {
             error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
         }
         return $rows;
     }

     public function get_element($name){
        return $this->$name;
      }
}