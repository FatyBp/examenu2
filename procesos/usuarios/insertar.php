
<?php
session_start();
?>
<?php
    include "../../clases/Conexion.php";
    include "../../clases/Usuario.php";
    $usuario = $_POST['usuario'];
    $password= sha1($_POST['password']);
    $nombre = $_POST['nombre'];
    $apellidopaterno = $_POST['apellido_paterno'];
    $apellidomaterno= $_POST['apellido_materno'];
    $datos=array($usuario,$password,$nombre,$apellidopaterno,$apellidomaterno);
    $obj = new Usuario();
    if ($obj->insertdatos($datos)==1) {
        $_SESSION["insertado"] ="1";
        header("location:../../../../view/login.php");
    }
    else{
        echo 2;
    }
?>