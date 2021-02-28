<?php 
class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
}

class Foo extends Bar
{
    public function __construct()
    {
        //gọi phương thức khởi tạo của class cha
        parent::__construct();
        echo 'Class Foo được khởi tạo';
    }
}

$foo = new Foo();
//Kết quả: Class Bar được khởi tạo
//Kết quả: Class Foo được khởi tạo
?>