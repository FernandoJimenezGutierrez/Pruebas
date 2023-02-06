<?php

class DB {
    public static function ejecutaConsulta($sql) {
        //echo $sql;
        $base = "fold";
        $usuario = 'root';
        $contrasena = '';

        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $dsn = "mysql:host=localhost;dbname=$base";
        $dwes = new PDO($dsn, $usuario, $contrasena, $opc);

        $resultado = null;
        if (isset($dwes)){
            $resultado = $dwes->query($sql);
        }
        return $resultado;
    }

    
}
?>