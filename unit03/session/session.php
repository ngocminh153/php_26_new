<?php 
	session_start();

	$username = 'ngocmn';
	// $_SESSION['username'] = $username;
	session_destroy();
	unset($_SESSION['username']);
?>

<a href="session2.php?username=<?php echo $username; ?>">session2</a>