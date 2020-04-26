<?php

require_once 'Model/usuarios.php';

if(!isset($_SESSION['user'])){
    if($_POST){
        $usuario = new Usuarios();
        $usuario->set_attribute("username", $_POST['username']);
        $usuario->set_attribute("pwd", md5($_POST['pwd']));
        $user = $usuario->login();
        if(is_object($user)){
            $_SESSION['user'] = serialize($user);
            include_once 'Controller/perfil.php';
        }else{
            include 'View/login.php';
        }
    }else{
        include "View/login.php";
    }
}else{
   $message = 'Debe salir de la sesion para continuar';
   include 'Controller/perfil.php';
}





