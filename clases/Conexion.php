<?php
    class Conexion {
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "";
        private $database = "examenu2";
        public function conectar() {
            try {
                $conexion = mysqli_connect(
                    $this -> servidor,
                    $this -> usuario,
                    $this -> password,
                    $this -> database
                );
                return $conexion;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    } 
?>