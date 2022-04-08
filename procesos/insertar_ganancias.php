<?php
    session_start();
    include "../clases/Conexion.php";
    include "../clases/Usuario.php";
    $monto = $_POST['monto_ganancia'];
    $categoria = $_POST['categoria_ganancia'];
    $fecha = $_POST['fecha_ganancia'];
    $datos = array($monto,$categoria,$fecha);
    $obj = new Usuario();
    $respuesta = $obj->inserta_ganancias($datos);
    if ($respuesta == 1) {
        echo 1;
    }
    else{
        echo $respuesta;
    }
?>