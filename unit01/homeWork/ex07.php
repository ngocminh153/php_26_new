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
    for ($i=0; $i<=$n; $i++) {
        for ($j=$n; $j>$i; $j--) {
            echo '*'; 
        }
        echo '<br>';
    }
?>
<form action="" method=POST>
Nhập vào số dòng: <input type="number" name="soDong"><br />
<input type="submit">
</form>


</body>
</html>

<?php
	for ($i=8; $i > 0 ; $i--) { 
		for ($j=0; $j < $i ; $j++) { 
			echo " # ";
		}
		echo "<br>";
	}
?>
