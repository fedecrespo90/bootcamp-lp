<?php
if (isset($_GET['id'])){

	$bookID = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	
	include('../model/load.php');
	$book = getBook($bookID);
	include('../view/inspect.php');

}else{
	header('location: ../index.php');
}

?>