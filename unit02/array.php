<?php 

// $array =array();

// $array = ['Zent', 'be all you can be'];
// var_dump($array);
//     echo  "<pre>";
//        print_r($arr_name);
//     echo "</pre>";
$arr_name = array(
	0 => 'zent',
	9 => 'be all'
);
$arr_name['name'] = 'zent group';
$arr_name[3] = 'be all';
$arr_name[4] = '3';

// print_r($arr_name);

// echo "<br> phần tử thứ 0: " . $arr_name[0];
// echo "<br> phần tử thứ 1: " . $arr_name[4];
// echo "<br> phần tử thứ 2: " . $arr_name['name'];

foreach ($arr_name as $key => $value) {
	if($key == 9){
		// break;  // thoát khỏi vòng
		continue; //bỏ qua
	}
	echo "<br> phần tử thứ " . $key . ":" . $value;
}


?>