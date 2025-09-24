<?php 
    class Conexion {
        public function conectar(){
            $host = "localhost";
            $usuario = "backend";//root
            $password = "backend2025";
            $base = "cesar_agenda";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            );
            return $conexion;
        }
    }

    $obj=new Conexion();
    if($obj -> conectar()){
        
    }else{
        echo "no funciona";
    }

   
