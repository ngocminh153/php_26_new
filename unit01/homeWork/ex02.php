<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
       $result = '';
       if (isset($_POST['calculate'])){
				$a = isset($_POST['a']) ? $_POST['a'] : '';
				$b = isset($_POST['b']) ? $_POST['b'] : '';
			    if ($a == 0) {
			    	if ($b == 0) {
			    	    $result = 'Phương trình vô số nghiệm';
			    	}else{
                        $result = 'Phương trình vô nghiệm';
			    	}
			    }else{
					$result = 'Phương trình có nghệm x = '.($b/$a);
			    }
			}
	?>
	<h1>Giải phương trình bậc hai</h1>
        <form method="post" action="">
            <input type="text" style="width: 20px" name="a" value=""/>x
            + 
            <input type="text" style="width: 20px" name="b" value=""/>
            = 0
            <br/><br/>
            <input type="submit" name="calculate" value="Tính" />
        </form>
        <?php echo $result; ?>
</body>
</html>