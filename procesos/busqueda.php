<?php
    session_start();
    include "../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con ->conectar();
    $fecha_inicial = $_POST['fecha_inicio'];
    $fecha_final = $_POST['fecha_final'];
    switch($_POST['opcion']){
        case 1:
            $sql = "SELECT id_activos, monto, nombre_activo  AS nombre, fecha FROM t_activos ta INNER JOIN t_cat_activos tca ON ta.id_tipo = tca.id_cat_activos where fecha >= '$fecha_inicial' AND fecha <= '$fecha_final'";
            $respuesta = mysqli_query($conexion, $sql);
            $datos = mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
            tabla($datos);
        break;
        case 2:
            $sql = "SELECT id_pasivos, monto, nombre_pasivo  AS nombre, fecha FROM t_pasivos tp INNER JOIN t_cat_pasivos tca ON tp.id_tipo = tca.id_cat_pasivos where fecha >= '$fecha_inicial' AND fecha <= '$fecha_final'";
            $respuesta = mysqli_query($conexion, $sql);
            $datos = mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
            tabla($datos);
        break;
    }
    function tabla($datos){
        $tablas = "";
        foreach ($datos as  $key) {
            $tablas .= "<tr><td>$key[monto]</td><td>$key[nombre]</td><td>$key[fecha]</td></tr>";
        }
        echo $tablas;
    }
?>