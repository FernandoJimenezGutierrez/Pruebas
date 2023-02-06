<?php
include 'DB.php';

//-------------------------------------------PRINCIPAL-----------------------------------------------------------------------
if (isset($_POST["jugadores"])) {
        $sql = "SELECT nombre from jugador";
        $resultado = DB::ejecutaConsulta($sql);
        $jugador = $resultado->fetch(PDO::FETCH_ASSOC);
        $jugadores=[];
        while($jugador != null){
            array_push($jugadores,$jugador);
            $jugador = $resultado->fetch(PDO::FETCH_ASSOC);
        }

        echo json_encode($jugadores);
}