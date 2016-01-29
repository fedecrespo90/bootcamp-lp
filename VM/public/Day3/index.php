<?php
    // Autoload classes
    require_once 'init.php';

    // Transport instances
    $plane = new Plane(900, true, 650);
    $car = new Car(110, false, 5);
    $bike = new Bike(25, false, 2);

    // Output
    echo "Plane: " . $plane->speed() . "In four hour, travels " . $plane->travelDistance(240) . "km.<br>";
    echo "Car: " . $car->speed() . "In four hour, travels " . $car->travelDistance(240) . "km.<br>";
    echo "Bike: " . $bike->speed() . "In four hour, travels " . $bike->travelDistance(240) . "km.<br>";
?>
