<?php
    function error ($transport, $passengers, $maxPassengers)
    {   echo "<style>.mensajeError{width: 650px;border: 2px solid #FF0000;background: #FFB6C1;color: #8B4513;padding: 5px;}</style>";
        echo "<div class='mensajeError'>";
        echo "You can't travel on a " . $transport . " with " . $passengers . " passengers. The maximun number of allowed passengers for the selected transport is " . $maxPassengers . ".";
        echo "</div>";
    }
