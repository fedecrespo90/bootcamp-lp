<?php
  require_once 'config/init.php';

  $render = new Render();
  $clean = new Cleaner();

  # GETs
  $action = $clean->text($_GET['action']);
  if($_GET['id']!="")
  {
    $id = $clean->num($_GET['id']);
  }


  # DEFAULT ACTION
  $default = 'list';

  # OPEN HTML
  $render->html($open);

  # ASIGN DEFAULT ACTION
  if(empty($action)){
    $action = $default;
  }

  include('routes.php');
  //$model->select($dbh);

  # CLOSE HTML
  $render->html($close);
