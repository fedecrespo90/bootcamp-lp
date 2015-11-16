<?php
	require_once ('db.php');
	require_once ('book.php');

	function updateBook($book){

		$id = $book->getId();
		$title = $book->getTitle();
		$description = $book->getDescription();
		$price = $book->getPrice();

        $pdo = new DB();
        $db  = $pdo->getDB();

		$query = $db->prepare("UPDATE books SET title =:title, description =:description, price =:price WHERE id =:id");

		$query->bindParam(':id', $id);
		$query->bindParam(':title', $title);
		$query->bindParam(':description', $description);
		$query->bindParam(':price', $price);

		$query->execute();
		$result = true;

		unset($query);
		unset($db);

		return $result;
	}

?>
