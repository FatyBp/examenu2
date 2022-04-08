<?php
    session_start();
    include "../../clases/Conexion.php";
    $con = new Conexion ();
    $conexion = $con->conectar();
    $sql = "SELECT * FROM t_cat_activos";
    $respuesta = mysqli_query($conexion, $sql);
    $catalogo = "<option value=0 >Selecciona </option>";
    while ($fila = mysqli_fetch_array($respuesta,MYSQLI_ASSOC)) {
       $catalogo .= "<option value= '$fila[id_cat_activos]' > $fila[nombre_activo] </option>";
    }
    echo $catalogo;
?>