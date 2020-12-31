<?php 
session_start();

function getAllStudents() {
	return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}

function getStudent($student_id) {

	$students = getAllStudents();
	$data = array();

	foreach ($students as $item) {
		if ($item['student_id'] == $student_id) {
			$data[] = $item;
		}
	}

	return $data;
}

function deleteStudent($student_id) {

	$students = getAllStudents();

	foreach ($students as $key => $item) {
		if ($item['student_id'] == $student_id) {
			unset($students[$key]);
		}
	}

	$_SESSION['students'] = $students;

	return $students;
}

function updateStudent($student_id,$student_name,$student_email,$student_gender,$student_address) {

	$students = getAllStudents();

	$new_student = array(
		'student_id' => $student_id,
		'student_name' => $student_name,
		'student_email' => $student_email,
		'student_gender' => $student_gender,
		'student_address' => $student_address
	);

	$is_update_action = false;
	foreach ($students as $key => $item) {
		if ($item['student_id'] == $student_id) {
			$students[$key] = $new_student;
			$is_update_action = true;
		}
	}

	if (!$is_update_action) {
		$students[] = $new_student;
	}

	$_SESSION['students'] = $students;


	return $students;
}
?>

<?php
require ('add_process.php');
$students = getAllStudents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh Sách Sinh Viên</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body" style="text-align: center;">
				<span class="label" style="color: black;font-size: 30px;">Danh Sách Sinh Viên</span><br>

				<a href="add.php"><button type="button" class="btn btn-primary">Thêm</button></a>

				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Mã Sinh Viên</th>
								<th>Họ Tên</th>
								<th>Email</th>
								<th>Giới Tính</th>
								<th>Địa Chỉ</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($students as $item) { ?>
							<tr style="text-align: left;">
								<td><a href="detail.php?id=<?php echo $item['student_id']; ?>"><?php echo $item['student_id']; ?></a></td>
								<td><?php echo $item['student_name']; ?></td>
								<td><?php echo $item['student_email']; ?></td>
								<td><?php echo $item['student_gender']; ?></td>
								<td><?php echo $item['student_address']; ?></td>
								<td width="5%">
									<form method="POST" action="delete.php">
										<input type="hidden" value="<?php echo $item['student_id']; ?>" name="student_id"/>
										<input onclick="return confirm('Bạn có chắc muốn xoá sinh viên này hay không?');" type="submit" value="Delete" class="btn btn-primary" name="delete"/>
									</form>
								</td>
								<td width="5%">
									<a href="add.php?id=<?php echo $item['student_id']; ?>"><button class="btn btn-primary">Cập nhật</button></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>