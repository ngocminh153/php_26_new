<?php 
require_once ('models/User.php');
require_once ('controllers/BaseController.php');
class AuthController extends BaseController{
	public function login(){
		$this->view('auth/login.php');
	}


	public function handle(){
			$username = $_POST['user'];
			$pwd = $_POST['password'];

			echo $username . ' - ' . $pwd;
			$user_model = new User();
			$check = $user_model->check($username, $pwd);

		if ($check){
			$_SESSION['login'] = true;
			echo 'dang nhap thanh cong';
			// setcookie('success', 'dang nhap thanh cong', time()+2);
			// header("Location: index.php");
		}else{
			echo 'dang nhap ko thanh cong';
			// setcookie('error', 'dang nhap ko thanh cong', time()+2);
			// header("Location: index.php");
		}
	}

	
}

?>
