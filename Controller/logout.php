<?php

include "Model/usuarios.php";

$usuario = new Usuarios();
$usuario = $usuario->logout();
include "View/Login.php";