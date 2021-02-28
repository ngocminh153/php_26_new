<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];
	// echo "Module: $mod";
	// echo "Module: $mod";

	$class_name = ucfirst($mod) . "Controller";

	$path = __DIR__ . "/controllers/" . $class_name . ".php";

	if (!file_exists($path)){
		//nếu ko tồn tại file
		echo "File $path khong ton tai";
		exit();
	}
	require_once($path);


	$controller_obj = new $class_name();

	if (!method_exists($controller_obj, $act)){
		//nếu ko tồn tại file
		echo "Method $act() khong ton tai";
		exit();
	}
	$controller_obj->$act();

?>