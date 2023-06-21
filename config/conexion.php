<?php
require_once "config.php";
	
    class Conexion{
        
        public static function conexion(){
            $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            $conn->set_charset(DB_CHARSET);
            if(mysqli_connect_errno()){
                echo "Error en la conexion: ".mysqli_connect_errno();
            }else{
                echo "Conexion exitosa";
            }
            return $conn;
        }

        
    }
    print_r(Conexion::conexion());
?>