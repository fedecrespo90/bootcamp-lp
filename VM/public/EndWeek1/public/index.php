<?php
session_start();
require_once 'config/init.php';
$header = file_get_contents('./views/layout/header.html');
$footer = file_get_contents('./views/layout/footer.html');
$render = new Render();
$validate = new Validate();

# Validating
if (isset($_GET)) {
  if ((isset($_GET["action"])) && isset($_GET["id"])) {
    $action =$validate->text($_GET['action']);
    $id = $validate->num($_GET['id']);
  }
}
# Validating input search box
if (isset($_POST)) {
    if (isset($_GET['action'])) {
      $action =$validate->text($_GET['action']);
      $render =  new Render();
    }
  }
# display successfull message
if (!empty($_SESSION['success'])) {
  print "Form submitted successfully.";
  $_SESSION['success'] = "";
}
# OPEN HTML
$render->html($header);
$default = 'list';
if(empty($action)){
  $action = $default;
}

#BODY
include 'routes/body.php';

# CLOSE HTML
$render->html($footer);
