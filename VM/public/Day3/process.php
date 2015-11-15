<?php
  require_once 'init.php'; 

  $mins = $_POST["mins"];
  $transport = $_POST["transport"];

  $plane = new Plane();
  $car = new Car();
  $bike = new Bike();

  $bms =  $bike::MAX_SPEED;
  $cms =  $car::MAX_SPEED;
  $pms =  $plane::MAX_SPEED;

  if(!is_numeric($transport))
  {
    switch ($transport) 
    {
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
  }
  else
  {
    # Err
    print "Please insert valid data!";
  }

  