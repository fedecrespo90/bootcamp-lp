<?php


  class Cleaner
  {
  public function text($data)
  {
        if($data != "")
        {
            $data = htmlspecialchars(filter_var($data, FILTER_SANITIZE_STRING));
        }
    return $data;
  }

  public function num($data)
  {
    $render =  new Render();
        if(is_numeric($data) && $data>0 && $data<7)
        {
            $data = htmlspecialchars(filter_var($data, FILTER_SANITIZE_STRING));
        }
        else
        {
          echo "<script>alert('Please insert valid data.');</script>";
        }
    return $data;
  }

  public function input($data)
  {
      if($data != "")
      {
          $data = htmlspecialchars(filter_var($data, FILTER_SANITIZE_STRING));
      }
      else
      {
        $render->html("<script>alert('Please insert valid data.');</script>");
      }
  }
}
