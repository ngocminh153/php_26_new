<?php
	$arr = array(1, 4, 2, 6, 9, 100, 45, 8, 20);
	for ($i = 0; $i < count($arr); $i++) { 
		if ($i == 0) {
			$search = $arr[0];
		} else {
			if ($arr[$i] > $search) {
				$search = $arr[$i];
			}
		}
	}
	echo "Phần tử lớn nhất trong mảng là : " . $search;
?>