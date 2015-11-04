<?php

require_once('../model/Bike.php');
require_once('../model/Car.php');
require_once('../model/Plane.php');

$picked = $_POST["transport"];
$count  = $_POST["passengers"];
$numOfPassengers = filter_var($count, FILTER_SANITIZE_STRING);

switch ($picked){
        case "bike":
            $transport  = new Bike  (20,false,2);
        break;
 
        case "car":
            $transport  = new Car   (180,false,4);
        break;
        
        case "plane":
            $transport = new Plane (1000,true,650);
        break;
        
        default:
			$message="Please Pick a transport"; 		      
        break;
 }

$max = $transport->getMaxPassengers();
if ($numOfPassengers > $max){
    $message="Passengers is greater than the maximum allowed";
    header('location: ../index.php?error='.$message); 
}
else{
    include("../view/index.php");    
}

?>