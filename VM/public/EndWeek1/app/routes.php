<?php
  # SWITCH $action
  switch ($action) {
    case 'single':
      include('routes/single.php');
      break;
    case 'edit':
      include('routes/edit.php');
      break;
    case 'list':
      include('routes/list.php');
      break;
    default:
      $render->html("We do not know the route! Please try again.");
      break;
  }
