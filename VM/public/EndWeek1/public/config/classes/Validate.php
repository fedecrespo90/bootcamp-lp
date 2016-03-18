<?php
class Validate
{
  public function text($data)
  {
    if ($data != "") {
      // htmlspecialchars() is used to convert specific HTML characters to their HTML entity names
      $data = htmlspecialchars(filter_var($data, FILTER_SANITIZE_STRING));
    }
    return $data;
  }
  public function num($data)
  {
    if($_GET['id']!="") {
      if(is_numeric($data) && $data>0)
      {
        $data = htmlspecialchars(filter_var($data, FILTER_SANITIZE_STRING));
      }
      else
      {
        echo "<script>alert('Please insert valid data.');</script>";
      }
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
