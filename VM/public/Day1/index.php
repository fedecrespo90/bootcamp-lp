<?php
  //Autoload Classes
  require_once 'init.php';

  //Classes
  $avion = new Plane;
  $auto = new Car;
  $bici = new Bike;
  $render = new Render;

  //Data
  $avionData = 'Plane: '.$avion->canFly(true).$avion->speed(900).$avion->maxPassengers(650);
  $autoData = 'Car: '.$auto->canFly(false).$auto->speed(110).$auto->maxPassengers(5);
  $biciData = 'Bike: '.$bici->canFly(false).$bici->speed(25).$bici->maxPassengers(2);

  //Render
  $render->html('<ul>'.'<li>'.$avionData.'</li>'.'<li>'.$autoData.'</li>'.'<li>'.$biciData.'</li>'.'</ul>');
