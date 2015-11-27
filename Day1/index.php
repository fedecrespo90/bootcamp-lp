<?php
    // Autoload classes
    require_once 'init.php';

    // Transport instances
    $plane = new Plane(900, true, 650);
    $car = new Car(110, false, 5);
    $bike = new Bike(25, false, 2);

    // Output
    echo "<ul>";
    echo "<li>" . "Plane: " . $plane->speed() . $plane->canFly() . $plane->maxPassengers() . "</li>";
    echo "<li>" . "Car: " . $car->speed() . $car->canFly() . $car->maxPassengers() . "</li>";
    echo "<li>" . "Bike: " . $bike->speed() . $bike->canFly() . $bike->maxPassengers() . "</li>";
    echo "</ul>";
?>
