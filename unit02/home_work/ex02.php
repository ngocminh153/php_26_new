<?php
	$arr = array(1, 4, 2, 6, 9, 100, 4);
	echo "Mảng trước khi sắp xếp là : ";
	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i] . ", ";
	}
	echo "<br>";
	for ($i = 0; $i < count($arr); $i++) {
			for ($j=0; $j < count($arr) ; $j++) { 
				if ($arr[$i] > $arr[$j]) {
					$tg = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $tg;
				}
			}
	}
	echo "Mảng sau khi sắp xếp theo thứ tự giảm dần là : ";
	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i] . ", ";
	}
?>
