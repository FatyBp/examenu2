<?php
    session_start();
    include "../clases/Conexion.php";
    include "../clases/Usuario.php";
    $monto = $_POST['monto_gastos'];
    $categoria = $_POST['categoria_gastos'];
    $fecha = $_POST['fecha_gastos'];
    $datos = array($monto,$categoria,$fecha);
    $obj = new Usuario();
    $respuesta = $obj->inserta_gastos($datos);
    if ($respuesta == 1) {
        echo 1;
    }
    else{
        echo $respuesta;
    }

?>