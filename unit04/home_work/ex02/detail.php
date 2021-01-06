<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h2>cart</h2>
		<div class="container">
			<a class="btn btn-success" href="index.php" title="">Trở lại</a>

			 <table class="table">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá tiền</th>
        <th>Số lượng</th>
      </tr>
    </thead>
    <tbody>
    	<?php $sum=0; ?>
      <?php foreach( $_SESSION['products'] as $key => $row )  { 

          $sum += $row[3]*$row[2];
      	?>
      <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2]?></td>
        <td><?php echo $row[3] ?></td>
        <td><?php echo $row['time'] ?></td>
        <td>
        	<a class="btn btn-danger" href="delete.php?msp=<?php echo $row[0] ?>" title="">Xóa</a>
        </td>
      </tr>

    

    <?php } ?>

      <tr>
      	<td colspan="2" style="color:red"> Tổng</td>
      	<td colspan="5" ><?php echo number_format($sum); ?></td>
      </tr>
    </tbody>
  </table>
		</div>
	</div>
</body>
</html>