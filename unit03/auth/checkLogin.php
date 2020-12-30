<?php 
	session_start();

	$username = $_POST['user'];
	$pwd = $_POST['pwd'];

	$check = check($username, $pwd);

	if ($check){
		echo 'co user';
		$_SESSION['login'] = true;
		setcookie('success', 'dang nhap thanh cong', time()+2);
		header("Location: index.php");
	}else{
		setcookie('error', 'dang nhap ko thanh cong', time()+2);
		header("Location: index.php");
		echo 'ko co user';
	}
	function check($username, $pwd){
		$users = [
			[
				'username' => 'hoan',
				'pwd' => '123456'
			],
			[
				'username' => 'ngoc',
				'pwd' => '123456'
			],
		];

		foreach ($users as $user) {
			if ($user['username'] == $username && $user['pwd']== $pwd){
				return true;
			}
		}

		return false;
	}

	?>