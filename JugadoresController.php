
    <?php
    include 'JugadoresModel.php';
    //$player = new JugadoresModel();
    //$jugadores = $player->leerJugadores();
    $jugadores = JugadoresModel::leerJugadores();
    include 'JugadoresView.php';
    ?>
</body>

