<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
$n= $_POST["soDong"];
for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($j <= $n - $i) {
                echo "&nbsp&nbsp";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }

?>
<form action="" method=POST>
Nhập vào số dòng: <input type="number" name="soDong"><br />
<input type="submit">
</form>


</body>
</html>



<?php
    $chuoi = "#";
    for ($i = 0; $i < 7 ; $i++) {
        if ($i < 7) {
            for ($k = 0; $k < 7 - $i; $k++) { 
                echo "&nbsp;&nbsp;&nbsp;";
            }
         } 
        for ($j=0; $j < $i; $j++) { 
            echo "&nbsp;". $chuoi;
        }
        echo "<br>";
    }
?>
