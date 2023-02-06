window.onload = function () {
    cargaPagina();
}



function cargaPagina() {
    //$('#mensaje').val("Hola Mundo");
    //var jugadores;
    $('#ad').on('click', pasarJugador);
    $('#at').on('click', volverJugador);

    
}

function pasarJugador(){
    $.ajax({
        method: "POST",
        url: "AJAX.php",
        response: "json",
        data: { jugadores: "players" }
    }).done(function (data) {
        //console.log(data);
        jugadores = JSON.parse(data);
        console.log(jugadores);
        var posicion=0;
        $jugadorActual=$("#mensaje").val();
        console.log($jugadorActual);
        for (var i = 0; i < jugadores.length; i++) {
            console.log(jugadores[i]['nombre']);
            if($jugadorActual===jugadores[i]['nombre']){
                posicion=i;
            }
        }
        console.log(posicion);
        $("#mensaje").val(jugadores[posicion+1]['nombre']);
    }).fail(function () {
        alert("Algo salió mal");
    }).always(function () {
    });
    
}

function volverJugador(){
    $.ajax({
        method: "POST",
        url: "AJAX.php",
        response: "json",
        data: { jugadores: "players" }
    }).done(function (data) {
        //console.log(data);
        jugadores = JSON.parse(data);
        console.log(jugadores);
        var posicion=0;
        $jugadorActual=$("#mensaje").val();
        console.log($jugadorActual);
        for (var i = 0; i < jugadores.length; i++) {
            console.log(jugadores[i]['nombre']);
            if($jugadorActual===jugadores[i]['nombre']){
                posicion=i;
            }
        }
        console.log(posicion);
        $("#mensaje").val(jugadores[posicion-1]['nombre']);
    }).fail(function () {
        alert("Algo salió mal");
    }).always(function () {
    });
    
}