<?php
    class Usuario {
        public function logear($usuario, $password) {
            try {
                $con = new Conexion ();
                $conexion = $con->conectar();
                $sql = "SELECT * FROM t_usuario WHERE usuario = '$usuario' AND password = '$password'";
                $respuesta = mysqli_query($conexion, $sql);
                $existe = mysqli_num_rows($respuesta);
                $_SESSION["usuario"] = $usuario;
                if ($existe > 0) {
                    return true;
                } else {
                    return false;
                }
            }catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertdatos($datos){
            $c=new Conexion();
            $conexion = $c->conectar();
            $sql="INSERT into t_usuario(usuario,password,nombre,apellido_paterno,apellido_materno) 
            values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            return $result=mysqli_query($conexion,$sql);
        }
        public function inserta_ganancias($datos){
            $c=new Conexion();
            $conexion = $c->conectar();
            $sql="INSERT into t_activos (monto,id_tipo,fecha) values ('$datos[0]','$datos[1]','$datos[2]')";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;
        }
        public function inserta_gastos($datos){
            $c=new Conexion();
            $conexion = $c->conectar();
            $sql="INSERT into t_pasivos (monto,id_tipo,fecha) values ('$datos[0]','$datos[1]','$datos[2]')";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;
        }
        public function mostrardatos($sql){
            $c=new Conexion();
            $conexion=$c->conectar();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function eliminardatos($id){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql = "DELETE from tareas where id_tarea='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
    };
?>