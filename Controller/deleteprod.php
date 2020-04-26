<?php 
    include_once 'Model/products.php';
    include_once 'Model/usuarios.php';

    if(!isset($_SESSION['user'])){
        include 'View/login.php';
    }else{
        $user = unserialize($_SESSION['user']);
        if($_GET['id_prod']){
            $id_prod = $_GET['id_prod'];
            $deleteItem = new Products();
            if($deleteItem = $deleteItem->delete($id_prod)){
                include 'Controller/perfil.php';
            }else{
                include 'Controller/perfil.php';
            }
        }
    }
    



