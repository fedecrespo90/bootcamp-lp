<?php
  require_once 'init.php';

  $mins = $_GET["mins"];
  $transport = $_GET["transport"];

  $plane = new Plane();
  $car = new Car();
  $bike = new Bike();

  $bms =  $bike::MAX_SPEED;
  $cms =  $car::MAX_SPEED;
  $pms =  $plane::MAX_SPEED;

  switch ($transport) {
    case 'bike':
      $print = $bike->travelDistance($mins,$bms);
      break;
    case 'car':
      $print = $car->travelDistance($mins,$cms);
      break;
    case 'plane':
      $print = $plane->travelDistance($mins,$pms);
      break;
  }

  print "Te travel distance is: ".round($print,2)." Km/H.";
