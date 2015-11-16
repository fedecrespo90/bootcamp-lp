<?php
if (isset($_POST['id'])){
	include('../model/book.php');
	include('../model/update.php');

	$bookID = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
	$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
	$price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
	$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

	$updatedBook = new Book ($bookID,$title,$price,$description);
	updateBook($updatedBook);

	header('location: ../index.php');
}else{
	header('location: ../index.php');
}
?>