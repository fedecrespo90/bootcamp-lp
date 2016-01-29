<?php
    // Abstract class
    Abstract class Transport
    {
        // Returns max speed
        Abstract protected function speed();

        // Returns if it can fly
        Abstract protected function canFly();

        // Returns passenger capacity
        Abstract protected function maxPassengers();
    }
