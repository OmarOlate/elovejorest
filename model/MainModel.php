<?php

if ($peticionAjax) {
    require_once "../config/configbd.php";
} else {
    require_once "./config/configbd.php";
}


class mainModel{
    // en este modelo se puede conectar a la base de datos 

    protected static function conectar(){
        $conexion = new PDO(SGBD, USER, PASS);
        $conexion->exec("SET CHARACTER SET UTF8");
        return $conexion;
    }
}