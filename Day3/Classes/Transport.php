<?php
    // Abstract class
    Abstract class Transport implements travel
    {
        // Returns max speed
        Abstract function speed();

        // Returns if it can fly
        Abstract function canFly();

        // Returns passenger capacity
        Abstract function maxPassengers();

        // Returns the travel distance based on the time of travel and the max speed of the transport.
        Abstract function travelDistance($timeOfTravel);
    }
