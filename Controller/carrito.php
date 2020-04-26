<?php

    include_once 'Model/carrito.php';
    include_once 'Model/usuarios.php';

    if(!isset($_SESSION['user'])){
        $message = 'Para agregar productos al carrito debe inicar sesion primero.';
        include 'View/Login.php';
    }else{
        $user = unserialize($_SESSION['user']);
        if($_POST){
            $carrito = new Carrito($_POST['name_prod'], $_POST['price'], $_POST['cant'], $_POST['image'], $_POST['type'], $user->get_element('id_user'), $_POST['id_prod']);
            if($carrito->insert()){
                include 'Controller/cart.php';
            }else{
                $message = 'Los datos no fueron insertados';
                include 'Controller/cart.php';
            }
        }
    }
    