<?php
  require_once '../config/init.php';

  $clean = new Cleaner();
  $model = new Model();

  $id = $clean->num($_GET['id']);
  $title = htmlspecialchars($_POST['title']);
  $price = htmlspecialchars($_POST['price']);
  $description = htmlspecialchars($_POST['description']);

  $err = file_get_contents('../public/err.html');

  if(is_numeric($price))
  {
    $model->update($host,$dbname,$user,$pass,$id,$title,$price,$description);
    header('Location: ../index.php');
  }
  else
  {
    echo $err;
  }
