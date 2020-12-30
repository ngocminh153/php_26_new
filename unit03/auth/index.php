<!-- <a href="login.php">login</a>
<a href="index.php">trang chu</a>
<a href="logout.php">logout</a> -->
<?php
	session_start();
	if (isset($_SESSION['login'])){
		echo '<a href="logout.php">logout</a>';

	}else{
		echo '<a href="login.php">login</a>';
	}
	if (isset($_COOKIE['error'])){
		echo '<p>' . $_COOKIE['error'] . '</p>';
	}
	if (isset($_COOKIE['success'])){
		echo '<p>' . $_COOKIE['success'] . '</p>';
	}
	if (isset($_SESSION['login'])){
		echo 'da login';
	}else{ 
		echo 'chua login';
	}
?>