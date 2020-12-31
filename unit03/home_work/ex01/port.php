<?php 

	$id = $_POST['id'];
	$name = $_POST['name'];
	$sdt = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$gioitinh = $_POST['gioitinh'];
	$diaChi = $_POST['address'];

	echo "Mã sinh viên: " . $id;
	echo " <br> Họ tên: " . $name;
	echo " <br> Số điện thoại: " . $sdt;
	echo " <br> Email: " . $email;
	echo " <br> Giới tính: " . $gioitinh;
	echo " <br> Địa chỉ: " . $diaChi;

?>