<?php
  //Class
  abstract class Transport implements iTransport
  {
      //TravelDistance
      public function travelDistance($cantMin,$kmH)
      {
        return ( $cantMin * $kmH ) / 60;
      }
      //CanFly
      public function canFly($bool)
      {
        if($bool)
        {
          $msg = "It can fly.";
        }
        else
        {
          $msg =  "It can not fly.";
        }
        return $msg;
      }

      //Speed
      public function speed($maxSpeed)
      {
        $msg = " Speed: ".$maxSpeed." Km/h. ";
        return $msg;
      }

      //Max Passengers
      public function maxPassengers($maxP)
      {
        $msg = "Max passengers: ".$maxP.".";
        return $msg;
      }
  }
