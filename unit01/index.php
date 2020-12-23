<?php 

$name= 'ngoc';
$address_1 ="hà đông";
$address_school = "chiến thắng";

	echo $name;

	echo "hello world <br>";
	echo "<h3>aaaaaaaaaaaaaa</h3>";

	echo "xin chào" . $name . "!";
	echo "xin chào $name !";

define('USER', 'anhngoc');
define('PASS', '123');

echo "user" . USER;

echo "<br>";

$numb=4;
	if($numb>0){
		echo $numb . "là số dương";

		if($numb%2 == 0){
			echo $numb . "là số dương chẵn";
		}else{
			echo $numb . "la so duong le";
		}

	} else if($numb<0){
		echo $numb . "là số am";
		if($numb%2 == 0){
		echo $numb . "là số am chẵn";
		}else{
			echo $numb . "la so am le";
		}
	}else{
		echo $numb . "la so khong";
	}

echo "<br>";

 $numb2 = 5;
 	if ($numb2 == 2){
 		echo "hom nay la thu 2";
 	} else if ($numb2 == 3) {
 		echo "hom nay la thu 3";
 	}else if ($numb2 == 4) {
 		echo "hom nay la thu 4";
 	}else if ($numb2 == 5) {
 		echo "hom nay la thu 5";
 	}else if ($numb2 == 6) {
 		echo "hom nay la thu 6";
 	}else if ($numb2 == 7) {
 		echo "hom nay la thu 7";
 	}else if ($numb2 == 8) {
 		echo "hom nay la thu cn";
 	}else{
 		echo "nhap lai";
 	}

 echo "<br>";

 $numb3 = 6;
 	switch ($numb3) {
 		case 2:{
 			echo "hom nay la thu 2";
 		} break;
 		case 3:{
 			echo "hom nay la thu 3";
 		} break;
 		case 4:{
 			echo "hom nay la thu 4";
 		} break;
 		case 5:{
 			echo "hom nay la thu 5";
 		} break;
 		case 6:{
 			echo "hom nay la thu 6";
 		} break;
 		case 7:{
 			echo "hom nay la thu 7";
 		} break;
 		case 8:{
 			echo "hom nay la thu cn";
 		} break;
 		default:{
 			echo "moi nhap lai";
 		}
 		
 	}

 

?>