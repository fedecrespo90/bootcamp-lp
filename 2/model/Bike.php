<?php
class Bike{
    
    private $speed;
    private $canFly;
    private $maxPassengers;

    public function __construct($speed, $canFly, $maxPassengers) {
        $this->speed = $speed;
        $this->canFly = $canFly;
        $this->maxPassengers =$maxPassengers;
    }

    public function getSpeed(){
        return $this->speed;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function getCanFly(){
        if ($this->canFly){
            return "it can fly";
        }else{
            return "it can not fly";
        }
    }
    public function setCanFly($can){
        $this->canFly = $can;
    }
    public function getMaxPassengers(){
        return $this->maxPassengers;
    }
    public function setMaxPassengers($max){
        $this->maxPassengers =$max;
    }

}
?>