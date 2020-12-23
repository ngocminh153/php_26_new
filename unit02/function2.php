<?php 
$bien_toan_cuc = 12;
function kiem_tra(){
	$bien_cuc_bo = 13;

	// $bien_cuc_bo++;
	// echo $bien_cuc_bo;

	global $bien_toan_cuc;
	$bien_toan_cuc++;
	echo $bien_toan_cuc;
}
kiem_tra();
kiem_tra();



function kiem_tra2(){
	static $a=0;
	$a++;
	if($a > 5){
		echo 'false';
	}else echo $a;
}
kiem_tra2();
kiem_tra2();
?>