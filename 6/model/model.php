<?php
    function getBooks(){
        require_once('vendor/spyc-0.5/spyc.php');
        $data = Spyc::YAMLLoad('model/books.yml');
        return $data['books'];
	}
?>