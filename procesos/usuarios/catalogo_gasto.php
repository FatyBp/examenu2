<?php
    session_start();
    include "../../clases/Conexion.php";
    $con = new Conexion ();
    $conexion = $con->conectar();
    $sql = "SELECT * FROM t_cat_pasivos";
    $respuesta = mysqli_query($conexion, $sql);
    $catalogo = "";
    while ($fila = mysqli_fetch_array($respuesta,MYSQLI_ASSOC)) {
       $catalogo .= "<option value= '$fila[id_cat_pasivos]' > $fila[nombre_pasivos] </option>";
    }
    echo $catalogo;
?>