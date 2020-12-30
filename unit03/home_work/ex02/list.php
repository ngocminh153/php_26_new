<?php 

	session_start();
	var_dump($_SESSION ['user']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<title>Document</title>
</head>
<body>
	//btn thêm
	<div>
		<a href="add.php">Thêm</a>
	</div>
	<table>
		<div>
			<tr>
				<th>Mã sinh viên</th>
				<th>Họ tên</th>
				<th>Action</th>
			</tr>
		</div>

		<tbody>
			<?php 
				if(isset($_SESSION['users'])){
					foreach ($_SESSION[users] as $user) {
						
					}
				}
			?>

			<tr>
				<td><?php echo $id['id'] ?></td>
				<td><?php echo $user['name'] ?></td>
				<td><?php echo $action['action'] ?></td>
			</tr>
		</tbody>
	</table>
</body>
</html>