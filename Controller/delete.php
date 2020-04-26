<?php 
    include_once 'Model/carrito.php';
    include_once 'Model/usuarios.php';

    if(!isset($_SESSION['user'])){
        include 'View/login.php';
    }else{
        $user = unserialize($_SESSION['user']);
        if($_GET['id_carrito']){
            $id_carrito = $_GET['id_carrito'];
            $deleteItem = new Carrito();
            if($deleteItem = $deleteItem->delete($id_carrito)){
                include 'Controller/cart.php';
            }else{
                include 'Controller/cart.php';
            }
        }
    }
    



