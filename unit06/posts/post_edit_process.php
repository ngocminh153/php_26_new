<?php 
	// require_once "connect.php";
 	require_once "../helpers/query_helper.php";
 	require_once "../helpers/Post.php";
	$data = $_POST;

	$data_insert = [
		'title' => $data['title'],
		'description' => $data['description'],
		'thumbnail' => $data['thumbnail'],
		'content' => $data['content'],
		'slug' => $data['slug'],
		'created_at' => $data['created_at']
	];

	// var_dump($data);

	// $query = "UPDATE categories SET name=' ". $data['name'] ." ' ,parent_id=' ". $data['parent_id'] ." ',thumbnail=' ". $data['thumbnail'] ." ', slug=' ". $data['slug'] ." ',description=' ". $data['description'] ." ',created_at=' ". $data['created_at'] ." ' WHERE  id = " . $data['id'];

	// $status = $conn->query($query);

	$post = new Post();
	$posts = $post->fix($data_insert,$data['id']);
	$status = $posts;
	if ($status == true) {
		setcookie('update',"Đã update thông tin thành công", time()+2);
	}

	header("Location: posts.php");
?>