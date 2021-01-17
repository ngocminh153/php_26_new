<?php 
	// require_once "connect.php";
	require_once "../helpers/query_helper.php";
	$id = $_GET['id'];
	// var_dump($id);

	// $query = "DELETE from categories where id = $id";

	// $status = $conn->query($query);
	$status = delete('categories', $id);

	header("Location: categories.php");

?>