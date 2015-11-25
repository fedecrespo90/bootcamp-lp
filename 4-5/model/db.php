<?php
class DB{

    private $db;

    public function __construct() {

        $user='root';
        $password='root';
        
        try{
           $this->db = new PDO('mysql:host=127.0.0.1;dbname=bookstore', $user, $password);
           $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
          echo "ERROR: ". $e->getMessage();
          die;
        }
        
    }

    public function getDB(){
        return $this->db;
    }

}
?>
