<?php 
 	$name = array('nam, khánh, bình, hậu, tuấn');

 	var_dump(in_array('hậu', $name));
 	var_dump(in_array('zent', $name));

 	echo "số lượng phần tử trong mảng: ". count($name);

 	$info = array(
 		'ID' => '13244',
 		'NAME' => 'ngọc minh',
 		'PHONE' => '09868979646'
 	);
 	if(array_key_exists(ID, $info)){
 		echo "ID: " . $info['ID'];
 	}else echo "không hợp lệ";

 	array_push($info, "1", "new 2");

?>