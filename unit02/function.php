<?php 
	// function kiem_tra_so_chan_le($number){
	// 	if ($number %2 == 0)
	// 		return true;
	// 	else return false;
	// }

	// $number = 12;
	// if (kiem_tra_so_chan_le($number)) {
	// 	echo 'sô chẵn';
	// }else {
	// 	echo "số lẻ";
	// }



	// $number2 = 13;
	// function kiem_tra_so_chan_le2($number2){
	// 	if($number2 % 2==0){
	// 		echo 'so chãmn';
	// 	}else{
	// 		echo 'so le';
	// 	}
	// }
	// kiem_tra_so_chan_le2($number2);


	function tinh_tong($a, $b, $c = false){
		$tong = $a + $b;
		if($c != false){
			$tong+= $c;
		}
		return $tong;
	}
	echo tinh_tong(2,3,4);
?>