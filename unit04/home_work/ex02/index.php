<?php 
  session_start();
  $products = array(

    'SP01'=> array('SP01','Điều hòa',10000,10),
    'SP02'=> array('SP02','Máy giặt',9000,120),
    'SP03'=> array('SP03','Quạt',7000,56),
    'SP04'=> array('SP04','Tivi',8000,80),
  );

?>
<html lang="en">
<head>
  <title>b3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hàng hóa</h2>
  <a class="btn btn-success" href="detail.php" title="">Xem giỏ hàng</a>
   <div class="container">
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
      <?php foreach( $products as $key => $row )  { ?>
      <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>

        <td>
        	<a href="add.php?msp=<?php echo $row[0] ?>" title=""><button type="button" class="btn btn-primary">Add</button></a>
        </td>
      </tr>

    <?php } ?>
    </tbody>
  </table>
   </div>        
  
</div>

</body>
</html>

