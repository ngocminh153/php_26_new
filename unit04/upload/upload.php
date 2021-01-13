<?php 
	if (isset($_POST['submit'])) {
		// echo "string";
		// var_dump($_FILES);
		$target_dir = "uploads/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
        $uploadOK = 1;
        // Check if file already exists
		if (file_exists($target_file)) {
			$uploadOK = 0;
    		echo "Sorry, file already exists.";
		}
        
        if ($uploadOK) {
        	if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            	echo "The file ". basename( $_FILES["ANH_SP"]["name"]). " has been uploaded.";
        	} else { // Upload file có lỗi 
            	echo "Sorry, there was an error uploading your file.";
        	}
        }
	}


	function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
		$target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$error_arr =array();
		
		// Check if file already exists
		if (file_exists($target_file)) {
		    $error_arr[] = "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES[$input_name]["size"] > $max_size) {
		    $error_arr[] = "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if(!in_array($imageFileType, $formats_allowed_array)) {
		    $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
		    $uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $error_arr[] = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
		        return $_FILES[$input_name]["name"];
		    } else {
		        $error_arr[] = "Sorry, there was an error uploading your file.";
		    }
		}
		return $error_arr;
	}

	
?>