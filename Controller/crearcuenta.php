<?php
include_once 'Model/usuarios.php';

if(!isset($_SESSION['user'])){
    if ($_POST) {
                $user = new Usuarios($_POST['username'], $_POST['name'], $_POST['last_name'], $_POST['age'], $_POST['email'], $_POST['rol_user'], 0, md5($_POST['pwd']));
                if($user->insert()){
                    $user = unserialize($_SESSION['user']);
                    include 'Controller/login.php';
                }else{
                    include 'View/crearcuenta.php';
                }
        }else {
            include 'View/crearcuenta.php';
        }
} else{
}

