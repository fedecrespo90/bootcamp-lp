<?php
  require_once 'init.php';

  $clean = new Cleaner;
  $render = new Render;
  
  $render->html($template);
