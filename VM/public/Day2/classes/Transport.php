<?php
  class Transport
  {
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
      public function speed($maxSpeed)
      {
        $msg = " Speed: ".$maxSpeed." Km/h. ";
        return $msg;
      }
      public function maxPassengers($maxP)
      {
        $msg = "Max passengers: ".$maxP.".";
        return $msg;
      }
  }
