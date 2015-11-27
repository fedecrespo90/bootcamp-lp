<?php
    class Car extends Transport
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
            } else {
                return "It can not fly. ";
            }
        }

        // Returns passenger capacity
        public function maxPassengers()
        {
            return "Max passengers: " . $this->pas;
        }
    }
