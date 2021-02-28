<?php 
session_start();
	$mod = "home";
	$act = "index";
	// echo "Module: $mod";
	// echo "Module: $mod";
	$type = "frontend";

	if(isset($_GET['mod'])){
		$mod = $_GET['mod'];
	}
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}
	if(isset($_GET['type'])){
		$type = $_GET['type'];
	}

	$class_name = ucfirst($mod) . "Controller";

	$path = __DIR__ . "/controllers/" . ucfirst($type). "/" . $class_name . ".php";

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