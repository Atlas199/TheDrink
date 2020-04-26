<?php

include_once 'Model/usuarios.php';
include_once 'Model/products.php';

$product = new Products();
$product = $product->select();
include 'View/beer.php';