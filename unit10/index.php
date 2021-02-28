<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];
	// echo "Module: $mod";
	// echo "Module: $mod";

	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;

				case 'create':
					$controller_obj->create();
					break;

				case 'store':
					$controller_obj->store();
					break;

				case 'edit':
					$controller_obj->edit();
					break;

				case 'update':
					$controller_obj->update();
					break;
				case 'delete':
					$controller_obj->delete();
					break;	
				
				default:
					echo "<br> Không tồn tại chức năng";
					break;
			}
			# code...
			break;
		case 'post':
			echo "Ban ban vao chuc nang quan ly bài viết";
			# code...
			break;
		case 'user':
			echo "Ban ban vao chuc nang quan ly nhân viên";
			# code...
			break;
		
		default:
			echo "Không tồn tại module";
			break;
	}
?>