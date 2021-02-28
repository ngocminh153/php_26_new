<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="index.php?mod=auth&act=handle">
		<tr>
			<td colspan="2" bgcolor="orange">
				<center>
				<b>ĐĂNG NHẬP HỆ THỐNG</b>
				</center>
			</td>
		</tr>
		<tr>
			<td width="50%">Tên tài khoản</td>
			<td>
				<input type="text" name="user">
			</td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td>
				<input type="password" name="password">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center>
				<input type="submit" value="Đăng nhập" name="btn_submit">
				</center>
			</td>
		</tr>
		<tr>
	</form>
</body>
</html>