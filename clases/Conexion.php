<?php 
    class Conexion {
        public function conectar(){
            $host = "localhost";
            $usuario = "root";//root
            $password = "";
            $base = "agenda";
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

   
