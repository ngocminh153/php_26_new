<?php 
	require_once ('models/Category.php');
	require_once ('controllers/BaseController.php');
	class CategoryController extends BaseController{
		public function list(){
			// echo 'List category';
			// $categories = [];
			$category = new Category();
    		$categories =$category->getList();
			// require_once('views/categories/list.php');
			$this->view('categories/list.php'), ['categories' => $categories, ];
		}

		//Hiển thị ra form tạo mới 
		public function create(){
			// require_once('views/categories/create.php');
			$this->view('categories/create.php');

		}


		//Lưu dữ liệu vào database
		public function store(){
			$data = $_POST;
			$data_insert = [
    			'name' => $data['name'],
    			'description' => $data['description']
    		];
    		$category = new Category();
   		 	$status = $category->create($data_insert);
    		// var_dump($data_insert);
    		// die();

    		 $this->redirect("Location: index.php?mod=category&act=list");
		}

// Hien thi form
		public function edit(){
			$id = $_GET['id'];
			$category_obj = new Category();
    		$category = $category_obj->find($id);
    		// require_once('views/categories/edit.php');
    		$this->view('categories/edit.php');
		}


		public function update(){
			$data = $_POST;
			$data_insert = [
			'name' => $data['name'],
			'parent_id' => $data['parent_id'],
			'thumbnail' => $data['thumbnail'],
			'slug' => $data['slug'],
			'description' => $data['description'],
			'created_at' => $data['created_at']
			];
			$category = new Category();
			$categories = $category->fix($data_insert,$data['id']);
			if ($categories == true) {
				setcookie('update',"Đã update thông tin thành công", time()+2);
			}
			$this->redirect("Location: index.php?mod=category&act=list");
		}

		public function delete(){
			$id = $_GET['id'];
			$category_obj = new Category();
			$category = $category_obj->del($id);
			if ($category == true) {
				setcookie('delete',"Xóa một mục thành công", time()+2);
			}
			$this->redirect("Location: index.php?mod=category&act=list");
		}
	}	
?>