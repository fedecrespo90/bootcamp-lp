<?php
require_once('model/Transport.php');
require_once('model/Bike.php');
require_once('model/Car.php');
require_once('model/Plane.php');

$bici  = new Bike  (20,false,2);
$auto  = new Car   (180,false,4);
$avion = new Plane (1000,true,650);

include_once('view/view.php');
?>