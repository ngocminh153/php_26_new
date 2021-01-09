<?php 
    session_start();
  if(isset($_POST['submit'])){
    $target_dir = "documents/";  

        $target_file = $target_dir . basename($_FILES["document"]["name"]);
       
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) { 
            echo "The file ". basename( $_FILES["document"]["name"]). " has been uploaded.";
            $doc_info = array(
                'name' => $_POST['name'],
                'file_name' => basename( $_FILES["document"]["name"])

            );
            $_SESSION['documents'][] = $doc_info;
            header('Location: index.php');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
  }
 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <legend>Upload document</legend>

            <div class="form-group">
                <label for="">Tên tài liệu</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="" name="document">
            </div> 
            
            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>