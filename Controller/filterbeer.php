<?php 
    include_once 'Model/products.php';

    if($_POST){
        $name = $_POST['name_prod'];
        $products= new Products();
        $product = $products->selectprod($name);
        include 'View/beer.php';
    }
    



