<?php
    class Plane extends Transport
    {
        // Class construct
        public function __construct($speed, $canFly, $passengers)
        {
            $this->spe = $speed;
            $this->fly = $canFly;
            $this->pas = $passengers;
        }

        // Returns max speed
        public function speed()
        {
            return "Speed: " . $this->spe . " km/h. ";
        }

        // Returns if it can fly
        public function canFly()
        {
            if ($this->fly) {
                return "It can fly. ";
            }else{
                return "It can not fly. ";
            }
        }

        /* Validates the amount of passengers can travel using the selected transport, in this case "Plane". Return a boolean*/
        public function maxPassengers(&$maxPassengers)
        {
            if ($this->pas >= 0 && $this->pas <= 650) {
                return "true";
            }else {
                $maxPassengers = 650;
                return "false";
            }
        }
    }
