<?php
	$name = "Nguyen Minh Ngoc";
	$data = explode(" ", $name);
	echo "Họ : " . $data[0] . "<br>";
	for ($i=1; $i < count($data) - 1 ; $i++) {
		$middle_name = "";
		$middle_name = $data[$i] . $middle_name;
	}
	echo "Tên đệm : " . $middle_name . "<br>";
	echo "Tên : " . $data[count($data) - 1];
?>