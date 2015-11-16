<?php
interface Traveling
{
    public function getSpeed();
    public function setSpeed($speed);
    public function getCanFly();
    public function setCanFly($can);
    public function getMaxPassengers();
    public function setMaxPassengers($max);
    public function getTravelDistance($minutes);
}
?>