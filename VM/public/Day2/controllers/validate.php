<?php
  require_once '../init.php';

  $clean = new Cleaner;
  $render = new Render;

  $passengers = $clean->num($_POST['passengers']);
  $transport = $clean->radio($_POST['transport']);

  $msgOk = '<script>alert("Ok! you can now travel. Bye");</script>';
  $msgNo =  '<script>alert("You can not travel!");</script>';

  if(is_numeric($passengers))
  {
    if($transport == 'plane')
    {
      if($passengers <= 650)
      {
        $render->html($msgOk);
      }
      else
      {
        $render->html($msgNo);
      }
    }
    else if($transport == 'car')
    {
      if($passengers <= 5)
      {
        $render->html($msgOk);
      }
      else
      {
        $render->html($msgNo);
      }
    }
    else if($transport == 'bike')
    {
      if($passengers <= 2)
      {
        $render->html($msgOk);
      }
      else
      {
        $render->html($msgNo);
      }
    }
  }
