<?php
  # Autoload Classes
  spl_autoload_register(function($class){
    require_once "objects/{$class}.php";
  });

  # HTML OPEN/CLOSE
  $open = file_get_contents('./public/open.html');
  $close = file_get_contents('./public/close.html');

  # DB
  require_once 'db.php';
