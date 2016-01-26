<?php
  interface iTransport
  {
      public function canFly($bool);
      public function speed($maxSpeed);
      public function maxPassengers($maxP);
  }
