<?php
switch ($action)
{
  case 'list':
    include('views/layout/bodyList.html');
    break;
  case 'info':
    include('views/layout/bodyInfo.html');
    break;
  case 'edit':
    include('views/layout/bodyInfo.html');
    break;
  case 'resultSearch':
    include('views/layout/bodyInfo.html');
    break;
  default:
  $render->html("<h1>Page not found</h1><br/>The page you are looking for could not be found");
  break;
}
