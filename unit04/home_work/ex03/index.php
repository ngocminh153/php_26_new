<?php 
    session_start();
    $documents = $_SESSION['documents'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
      <h3 class="text-center">--- Documents ---</h3>
        <a href="upload.php" class="btn btn-success">Upload Document</a>
        <table class="table">
          <thead>
                <th> No </th>
                <th> Name </th>
                <th> Downloads </th>
                <th>#</th>
            </thead>
        <?php foreach($documents as $key=> $document){ ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $document['name'] ?></td>
                <td><a class="btn btn-primary" href="documents/<?= $document['file_name'] ?>">Download</a></td>
                <td><a class="btn btn-danger" href="remove.php?id=<?=$key?>">Remove</a></td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>