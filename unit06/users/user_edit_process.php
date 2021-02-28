<?php
require_once('../helper/Query.php');
require_once "../helpers/User.php";
	$data = $_POST;
	$data_insert = [
		'name' => $data['name'],
		'email' => $data['email'],
		'avatar' => $data['avatar']
	];
	// $query = "UPDATE categories SET name = '" . $data['name'] . "', parent_id = '".$data['parent_id']."', thumbnail = '".$data['thumbnail']."', slug = '".$data['slug']."' ,description ='". $data['description'] ."', created_at = '".$data['created_at']."'  WHERE  id =  " . $data['id'];
	$user = new User();
	$users = $user->fix($data_insert,$data['id']);
	$status = $users;
	if ($status == true) {
		setcookie('update',"Đã update thông tin thành công", time()+2);
	}
    header("Location: users.php");
?> 