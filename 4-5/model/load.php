<?php
	require_once ('db.php');
	require_once ('book.php');

	function load(){

        $pdo = new DB();
        $db  = $pdo->getDB();


		$query = $db->prepare("SELECT * FROM books");
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Book',[null, null, null, null]);
        $query->execute();

		$result = $query->fetchAll();

		unset($query);
		unset($db);

		return $result;
	}


	function getBook($id){

		$pdo = new DB();
        $db  = $pdo->getDB();

		$query = $db->prepare("SELECT * FROM books WHERE id=:id");
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Book',[null, null, null, null]);
        $query->bindParam(':id', $id);
        $query->execute();

		$result = $query->fetch();

		unset($query);
		unset($db);

		return $result;

	}

?>
