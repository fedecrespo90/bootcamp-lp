<?php
class Connection {
  # Connect to the database
  public function connect()
  {
    // DBH = DataBase Handle
    try {
        //absolute file path
        $root = $_SERVER['DOCUMENT_ROOT'];
        // Load configuration as an array
        $config = parse_ini_file($root . '/EndWeek1/public/config/configDb.ini');
        //MySQL with PDO_MYSQL
        $DBH = new PDO("mysql:host=$config[host]; dbname=$config[dbname]", "$config[username]", "$config[password]");
        // Set error mode to exception (by default error mode is silent)
        $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>console.log('Conected to database.');</script>";
        return $DBH;
    }
    catch(PDOException $e) {
      echo "It cannot connect  to the database because: " . $e->getMessage();
      // The exception sends the details of the error to a log file
      file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    }
  }

  # Update
  public function update($id,$title,$price,$description) {
    try
    {
      //absolute file path
      $root = $_SERVER['DOCUMENT_ROOT'];
      // Load configuration as an array
      $config = parse_ini_file($root . '/EndWeek1/public/config/configDb.ini');
      //MySQL with PDO_MYSQL
      $DBH = new PDO("mysql:host=$config[host]; dbname=$config[dbname]", "$config[username]", "$config[password]");
      // Set error mode to exception (by default error mode is silent)
      $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE books SET title='".$title."', price='".$price."', description='".$description."' WHERE id=".$id;
      # sth means "Statement Handle"
      $sth = $DBH->prepare($sql);
      $sth->execute();
    }
    catch(PDOException $e)
    {
      echo "It cannot connect  to the database because: " . $e->getMessage();
      // The exception sends the details of the error to a log file
      file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    }
    $DBH = null;
  }
}
?>
