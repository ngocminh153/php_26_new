<?php 
	require_once "connect.php";
	require_once "../helpers/User.php";

	$user = new User();
	$users = $user->move($id);
	$status = $users;
	if ($status == true) {
		setcookie('delete',"Xóa một mục thành công", time()+2);
	}

	header("Location: users.php");

?>