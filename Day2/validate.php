<?php
    // Autoload classes
    require_once ('init.php');
    require ('error.php');

    /*control variable "error" to display what is wrong in the form*/

    /*determine if the form was submitted*/
    if (isset($_POST['submit'])) {

        /*validate input*/
        if (isset($_POST["transport"])) {
            switch ($_POST["transport"]) {
                case 'Bike':
                    $bike = new Bike(60, false, $_POST['passengers']);
                    if ($bike->maxPassengers($maxPassengers) == "false") {
                        $error = "true";
                    }
                    break;

                case 'Car':
                    $car = new Car(160, false, $_POST['passengers']);
                    if ($car->maxPassengers($maxPassengers) == "false") {
                        $error = "true";
                    }
                    break;

                case 'Plane':
                    $plane = new Plane(1200, true, $_POST['passengers']);
                    if ($plane->maxPassengers($maxPassengers) == "false") {
                        $error = "true";
                    }
                    break;

                default:
                    break;
            }
        }else{
            echo "Please Pick a transport.";
            $error = "true";
        }

        if (isset($_POST["passengers"])) {
            if (!empty($_POST['passengers'])) {
                $_POST['passengers'] = filter_var($_POST['passengers'], FILTER_SANITIZE_NUMBER_INT);
                if (($_POST['passengers'] == "") || ($_POST['passengers'] <= 0)) {
                    echo "Please enter a valid passengers number.";
                    $error = "true";
                }
            }else {
                echo "Please enter the amount of passengers correctly, it can't be cero or less.";
                $error = "true";
            }
        }

        if (empty($error)) {
            header("Location: submissionForm.php");     /*the form is correct, display: "Ok! you can now travel. Bye*/
        }elseif (!empty($_POST["transport"]) && (!empty($_POST['passengers']))) {
            if ($error = "true" && !($_POST['passengers'] <= 0)) {
                error($_POST["transport"], $_POST['passengers'], $maxPassengers);   /*display error:"You can't travel on a bike/car/plane..etc"*/
            }
        }
    }
