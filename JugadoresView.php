<html>
    <ul>
        <?php 
        

            foreach($jugadores as $jugador){?>
                <li><?php echo $jugador['nombre']; ?></li>
                
                <?php }

            
        ?>
    </ul>
    <input id="mensaje" type="text" value="<?php echo $jugadores[0]['nombre']; ?>">
    <br>
    <button id="at">Atrás</button>
    <button id="ad">Adelante</button>
    
</html>