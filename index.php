<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
    <?php require_once './app/dependencias.php'?>
</head>
<body>
    <?php
        if(isset($_GET['rutas'])):
            switch($_GET['rutas']){
                case 'login':{
                    require_once 'view/login.php';
                    break;
                }
                case 'registro':{
                    require_once 'view/registro.php';
                    break;
                }
                case 'inicio':{
                    require_once 'view/inicio.php';
                    break;
                }
            }
        else:
            require_once 'view/login.php';
        endif
    ?>
</body>
</html>