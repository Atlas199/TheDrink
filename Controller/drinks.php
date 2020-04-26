<?php

include_once 'Model/products.php';

$product = new Products();
$product = $product->select();
include 'View/drinks.php';