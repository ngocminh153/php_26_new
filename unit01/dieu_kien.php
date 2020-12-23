<?php 

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

?>