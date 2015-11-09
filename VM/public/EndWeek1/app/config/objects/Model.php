<?php
  class Model
  {
    # CONNECT
    public function connect($host,$dbname,$user,$pass)
    {
      # connect to the database
      try
      {
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        echo "<script>console.log('Conected to database!');</script>";
        return $DBH;
      }
      catch(PDOException $e)
      {
          echo "I'm sorry, Dave. I'm afraid I can't do that.";
          file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
      }

    }

    # UPDATE
    public function update($host,$dbname,$user,$pass,$id,$title,$price,$description)
    {

      try {
          $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $sql = "UPDATE books SET title='".$title."', price='".$price."', description='".$description."' WHERE id=".$id;

          // Prepare statement
          $stmt = $conn->prepare($sql);

          // execute the query
          $stmt->execute();

          // echo a message to say the UPDATE succeeded
          echo $stmt->rowCount() . " records UPDATED successfully";
          }
      catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
          }

      $conn = null;
    }
  }
