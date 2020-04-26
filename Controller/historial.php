<?php
    require_once 'Model/usuarios.php';
    include_once 'Model/historial.php';
    include_once 'Model/carrito.php';
  

    if(!isset($_SESSION['user'])){
        $message = 'Para agregar productos al carrito debe inicar sesion primero.';
        include 'View/Login.php';
    }else{
        $user = unserialize($_SESSION['user']);
        if($_POST){
            $historial = new Historial($_POST['date'], $_POST['time'], $_POST['cantBeer'], $_POST['cantWine'], $_POST['cantDrinks'], $_POST['total'], $user->name, $user->last_name, $user->get_element('id_user'));
            $carrito = new Carrito();
            if($historial->insert()){
                if($carrito->deleteCart($user->get_element('id_user'))){
                    include 'Controller/thanks.php';
                }else{
                    echo 'No se borraron las compras del carrito';
                    include 'Controller/cart.php';
                }
            }else{
                echo'La compra no fue exitosa';
                include 'Controller/cart.php';
            }
        }
    }
    