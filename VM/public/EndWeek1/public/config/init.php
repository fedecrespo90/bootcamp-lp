<?php
//Autoload classes
spl_autoload_register(function ($class)
{
  require_once "classes/{$class}.php";
}
);
$path = $_SERVER['DOCUMENT_ROOT'] . '/EndWeek1/public/';  // the variable $path contains the absolute path of the app

//connect  to the database
$connec_db = new Connection();
$dbh = $connec_db->connect();
