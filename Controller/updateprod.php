<?php

    include_once 'Model/usuarios.php';
    include_once 'Model/products.php';

    if(!isset($_SESSION['user'])){
        $message = 'Debe iniciar sesion para continuar';
        include 'View/login.php';
    }else{
        $user = unserialize($_SESSION['user']);
        if($_POST){
            $directorio = 'files/';
            $subir_archivo = $directorio.basename($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $subir_archivo)){
                $product = new Products($_POST['name_prod'], $_POST['price'], $_POST['type'], $_POST['pais'], $_POST['tipo_prod'], $_POST['description'], $subir_archivo, $_POST['id_prod']);
                $prods = new Products();
                $prod = $prods->select();
                if($product->update()){
                    include 'View/perfil.php';
                }else{
                    $message = 'Los datos no fueron insertados';
                    include 'View/perfil.php';
                }
            }else{
                $message = 'Error';
                include 'View/perfil.php';
            }
        }else{
            include 'View/update.php';
        }
        
    }