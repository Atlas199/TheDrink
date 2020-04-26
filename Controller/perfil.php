<?php
    include_once "Model/usuarios.php";
    include_once 'Model/historial.php';
    include_once 'Model/products.php';

    if(!isset($_SESSION['user'])){
        $message = "Debe iniciar sesion para seguir";
        include_once "View/login.php";
    }else{
        $user = unserialize($_SESSION['user']); 
        $products = new Products();
        $prod = $products->select();
        $historial = new Historial();
        $historial = $historial->select();
        include 'View/perfil.php';
        include 'View/historial.php'; 
    }

    