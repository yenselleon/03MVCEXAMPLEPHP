<?php

class Conexion {

    static public function conectar(){

        ##PDO("Nombre del servidor", nombre de la base de datos, usuario, contraseña );
        ##la contraseña dependera si estas en local o en un hosting

        $link = new PDO("mysql:host=localhost;dbname=curso_udemy_php",
                        "root",
                        "" );

        $link->exec("set names utf8");

        return $link;

    }

}

?>