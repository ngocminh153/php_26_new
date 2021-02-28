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

			// echo $username . ' - ' . $pwd;
			$user_model = new User();
			$check = $user_model->check($username, $pwd);

		if ($check){
			$_SESSION['login'] = true;
			$email = '"'.$username.'"';
			$user = $user_model->findE($email);
			$_SESSION['user_login'] = $user['name'];
			$_SESSION['ava_login'] = $user['avatar'];
			setcookie('Đăng nhập thành công');
			$this->redirect('index.php?type=backend&mod=dashboard&act=index');
			// echo 'dang nhap thanh cong';
			// setcookie('success', 'dang nhap thanh cong', time()+2);
			// header("Location: index.php");
		}else{
			$_SESSION['login'] = null;
				setcookie('Đăng nhập không thành công');
			$this->redirect('index.php?type=backend&mod=auth&act=login');
			// echo 'dang nhap ko thanh cong';
			// setcookie('error', 'dang nhap ko thanh cong', time()+2);
			// header("Location: index.php");
		}
	}

	
}

?>
