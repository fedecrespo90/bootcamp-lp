<?php
  class Cleaner
  {
    public function num($data)
    {
      $render =  new Render;
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        if($data != "" && is_numeric($data))
        {
            $data = filter_var($data, FILTER_SANITIZE_STRING);
        }
        else
        {
          $render->html("<script>alert('Please insert valid data.');</script>");
        }
    }
    return $data;
  }

  public function radio($data)
  {
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(!isset($data))
      {
        $render->html("You must select 1 option");
      }
    }
    return $data;
  }
}
