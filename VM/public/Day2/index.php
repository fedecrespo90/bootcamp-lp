<?php
  require_once 'init.php';
  
  //Load template
  $template = file_get_contents('template/home.html');


  $clean = new Cleaner;
  $render = new Render;
  
  $render->html($template);
