<?php namespace Models;
    class Connection {
        private $data= array(
            "host" => "localhost",
            "user" => "root",
            "pass"=> "admin"
            "db" => "bookstore"
        );
        private $connec

        public function __construc()
        {
            $this->con = new \mysqli($this->data['host'], $this->data['user'], $this->data['pass'], $this->data['db']);
        }

        public function simpleQeuery($sql)
        {
            $this->connec->query($sql);
        }

        public function returnQuery($sql)
        {
            $data = $this->connec->query($sql);
            return $data;
        }
    }
?>
