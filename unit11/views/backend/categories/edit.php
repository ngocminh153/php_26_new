<?php require_once('./views/backend/includes/header.php')?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body> -->
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="index.php?type=backend&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $category['id']?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name']?>">
            </div>
            <div class="form-group">
                <label for="">Danh Mục cha</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?php echo $category['parent_id']?>">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $category['thumbnail']?>">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $category['slug']?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $category['description']?>">
            </div>
            <div class="form-group">
                <label for="">Ngày tạo</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $category['created_at']?>">
            </div>
            
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
<?php require_once('views/backend/includes/footer.php')?>
<!-- </body>
</html> -->