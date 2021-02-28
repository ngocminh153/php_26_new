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
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $category['id']?>">
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
                <label for="">Ảnh</label>
                <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $category['avatar']?>">
            </div>
            
            <div class="form-group">
                <label for="">Ngày tạo</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $category['created_at']?>">
            </div>
            
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>