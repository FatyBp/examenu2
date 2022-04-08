<?php
    session_start();
    include "../clases/Conexion.php";
    include "../clases/Usuario.php";
    $usuarios = new Usuario();
    $usuario = $_POST['usuario'];
    $password =sha1( $_POST['password']);

    $respuesta = $usuarios-> logear($usuario, $password); 
    if ($respuesta){
        echo 1;
        // echo "estas dentro";
    } else{
        echo 0;
    }
?>