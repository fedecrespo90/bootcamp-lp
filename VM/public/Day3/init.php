<?php
  //Interfaces
  require_once 'interfaces.php';
  //Autoload Classes
  spl_autoload_register(function($class){
    require_once "classes/{$class}.php";
  });
