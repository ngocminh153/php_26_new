<?php 
	// print_r($_POST);

	$servername = "localhost";

	$username = "root";

	$password = "";

	$dbname = "php_blog";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO categories (name, parent_id, thumbnail, slug, description, created_at) VALUES ('".$data['name']."', '".$data['parent_id']."','".$data['thumbnail']."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";


// Thực thi câu lệnh
    $status = $conn->query($query);

    // var_dump($status);

    header("Location: categories.php");

?>