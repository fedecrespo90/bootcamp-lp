<?php
# DB
$model =  new Model();

# SET DEV ENVIRONMENT
$environment =  'dev';

# SWITCH ENVIRONMENT
switch($environment)
{
  case 'dev':
    $host = 'localhost';
    $dbname = 'bootcampTest';
    $user = 'root';
    $pass =  'chicho1';

    $dbh = $model->connect($host,$dbname,$user,$pass);
    break;
  case 'qc':
    $host = '';
    $dbname = '';
    $user = '';
    $pass =  '';

    $dbh = $model->connect($host,$dbname,$user,$pass);
    break;
  case 'production':
    $host = '';
    $dbname = '';
    $user = '';
    $pass =  '';

    $dbh = $model->connect($host,$dbname,$user,$pass);
    break;
}
