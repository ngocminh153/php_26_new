<?php 
	// require_once "../helpers/connect_helper.php";

	require_once "../helpers/query_helper.php";
    require_once "../helpers/Post.php";
	
    $post = new Post();
    $posts = $post->getList();

	// var_dump($conn);


	// $categories = select('categories');

	$categories = select('posts', [' id', 'title', 'description', 'thumbnail']);

	// $query = "SELECT * FROM categories";

	// $result = $conn->query($query);

	// $categories = array();

	// while ($row = $result->fetch_assoc()) {
	// 	$categories[]= $row;
	// }



	// var_dump($categories
	// foreach ($categories as $item)
 //     // echo "<pre>";
 //     //      print_r($item);
 //     // echo "</pre>";



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="Category_add.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>

            <?php foreach ($posts as $item){ ?>
            
            <tr>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['title']?></td>
                <td><?php echo $item['description']?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                
                <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="category_edit.php?id=<?php echo $item['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            

        <?php } ?>
        </table>
    </div>
</body>
</html>