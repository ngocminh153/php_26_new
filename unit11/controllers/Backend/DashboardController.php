<?php 
	require_once('controllers/Backend/BackendController.php');
	class DashboardController extends BaseController{
		public function index(){
			$this->view('backend/dashboard/index.php');
		}
	}
?>