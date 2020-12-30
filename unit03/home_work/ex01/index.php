<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>GỬI DỮ LIỆU DÙNG POST</h1>
        <form action="post.php" method="POST" role="form">
            <legend>Get files</legend>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="">
            </div>
            
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ tên sinh viên" name="">
            </div>  
            
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="">
            </div> 

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="">
            </div> 

            <div class="form-group">
                <form>
                    <input name="gioitinh" type="radio" value="Nam" />Nam
                    <input name="gioitinh" type="radio" value="Nữ" />Nữ
                    <input name="gioitinh" type="radio" value="Khác" />Khác
                </form>
            </div> 

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="">
            </div> 

            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>