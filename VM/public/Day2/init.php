<?php
  //Autoload
  spl_autoload_register(function($class){
    require_once "classes/{$class}.php";
  });
  //Load template
  $template = file_get_contents('template/home.html');
