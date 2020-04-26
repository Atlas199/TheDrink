<?php

include_once 'Model/carrito.php';
include_once 'Model/usuarios.php';

if(!isset($_SESSION['user'])){
    $message = 'Debe iniciar sesion para continuar';
    include 'View/login.php';
}else{
    $user = unserialize($_SESSION['user']);
    $carrito = new Carrito();
    $carrito = $carrito->select();
    include 'View/carrito.php';
}