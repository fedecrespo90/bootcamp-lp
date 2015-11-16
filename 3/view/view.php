<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">    
<head>
    <title>Transportes</title>
    <meta charset="UTF-8">
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <div id="header">
        <h1>Transportes</h1>
    </div>
    <div id="cuerpo">
        <ul>
            <li>Plane: Speed: <?php echo($avion->getSpeed());?>  Km/h. <?php echo($avion->getCanFly());?>. Max passengers: <?php echo($avion->getMaxPassengers());?></li>
            <li>Car:   Speed: <?php echo($auto ->getSpeed());?>  Km/h. <?php echo($auto->getCanFly());?>.  Max passengers: <?php echo($auto->getMaxPassengers());?></li>
            <li>Bike:  Speed: <?php echo($bici ->getSpeed());?>  Km/h. <?php echo($bici->getCanFly());?>.  Max passengers: <?php echo($bici->getMaxPassengers());?></li>
        </ul>
    </div>
</body>
</html>