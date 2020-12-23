<?php 

$tong = 0;
$n =10;

for ($i=1; $i <= $n ; $i++) { 
	if($i % 2 != 0){
		$tong += ($i*$i);
	}
}

echo "tong bang: " . $tong;

echo "<br>";

$tong2 = 0;
$m = 10;

for ($j = 1; $j <= $m; $j=$j+2) {
    $tong2 += ($j*$j);
}

echo "tong bang: " . $tong2;

?>