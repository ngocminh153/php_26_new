<?php 
require_once('connect.php');
$id = $_GET['id'];

// Có thể dùng isset để kiểm tra tồn tại $_GET

// $id = isset($_GET['$id'])?$_GET['$id']:NULL;
// var_dump($id);
// Viết câu lệnh để thêm dữ liệu

$query = "SELECT * from users WHERE id = ". $id;

// Thực thi câu lệnh
$result = $conn->query($query);

// Trả về 1 bản ghi 
$category = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <hr>
        <form action="user_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name']?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $category['email']?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="" name="password" value="<?php echo $category['password']?>">
            </div>
             <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $category['avatar']?>">
            </div>
             <div class="form-group">
                <label for="">Created At</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at"  value="<?php echo $category['created_at']?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>