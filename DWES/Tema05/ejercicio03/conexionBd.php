<?php
    // utilizando constructores y métodos de la programación orientada a objetos
    function conectar(){
        $host='localhost'; $usuario='gestisimal'; $pass='gestisimal2021'; $bd='gestisimal';
        return $conexion = new MySQLi($host, $usuario, $pass, $bd);
    }

?>