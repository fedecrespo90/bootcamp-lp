<?php
    class Plane extends Transport
    {
        public static $spe;
        // Class construct.
        public function __construct($speed, $canFly, $passengers)
        {
            self::$spe = $speed;
            $this->fly = $canFly;
            $this->pas = $passengers;
        }

        // Returns max speed.
        public function speed()
        {
            return "Speed: " . self::$spe . " km/h. ";
        }

        // Returns if it can fly.
        public function canFly()
        {
            if ($this->fly) {
                return "It can fly. ";
            } else {
                return "It can not fly. ";
            }
        }

        // Returns passenger capacity.
        public function maxPassengers()
        {
            return "Max passengers: " . $this->pas;
        }

        // Returns the travel distance in km.
        public function travelDistance($timeOfTravel)
        {
            return self::$spe / 60 * $timeOfTravel;
        }
    }
