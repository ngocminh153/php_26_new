<?php 
	// require_once "connect.php";
 	require_once "../helpers/query_helper.php";
	$data = $_POST;

	// var_dump($data);

	// $query = "UPDATE categories SET name=' ". $data['name'] ." ' ,parent_id=' ". $data['parent_id'] ." ',thumbnail=' ". $data['thumbnail'] ." ', slug=' ". $data['slug'] ." ',description=' ". $data['description'] ." ',created_at=' ". $data['created_at'] ." ' WHERE  id = " . $data['id'];

	// $status = $conn->query($query);

	$data_update = [
    	'name' => $data['name'],
    	'description' => $data['description']
    ];

	$status=  update('categories', $data_update, $data['id']);

	header("Location: categories.php");
?>