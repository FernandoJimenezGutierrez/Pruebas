<?php
include 'DB.php';
class JugadoresModel{
    static function leerJugadores()
    {
        $sql = "SELECT nombre from jugador";
        $resultado = DB::ejecutaConsulta($sql);
        $jugador = $resultado->fetch(PDO::FETCH_ASSOC);
        $jugadores=[];
        while($jugador != null){
            array_push($jugadores,$jugador);
            $jugador = $resultado->fetch(PDO::FETCH_ASSOC);
        }

        return $jugadores;
    }
}