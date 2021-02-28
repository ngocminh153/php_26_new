<?php 
 require_once('controllers/BaseController.php');
 require_once('models/Post.php');
 class PostController extends BaseController
 {

 	public function index(){
 		$post = new Post();
		$posts = $post->getList();
 		$this->view('backend/posts/index.php',['posts' => $posts]);
 	}

 	public function create(){
			$this->view('backend/posts/create.php');
		}
	
		public function store(){
			 $data = $_POST;
			  if (isset($_POST['upload'])) {
				    $image = $_FILES['thumbnail']['name'];
				  }
			 $data_insert = [
		    	'id' => $data['id'],
		     	'title' => $data['title'],
		    	'description' => $data['description'],
		    	'thumbnail' => $image,
		    	'content' => $data['content'],
		      	'slug' => $data['slug'],
		     	'tag' => $data['tag'],
		      	'view_count' => $data['view_count'],
		      	'category_id' => $data['category_id'],
		      	'user_id' => $data['user_id'],
		      	'created_at' => $data['created_at']
		    ];
		    $post = new Post();
		    $posts = $post->create($data_insert);
		    if ($posts == true) {
   	 			setcookie('add_new',"TThêm thành công");
   			}
		    $this->redirect("index.php?type=backend&mod=post&act=index");
		}
		public function edit(){
			$id = $_GET['id'];
			$post_obj = new Post();
			$post = $post_obj->find($id);
			$this->view('backend/posts/edit.php',['post'=>$post]);
		}
		public function update(){
			$data = $_POST;
			if (isset($_POST['upload'])) {
				if ($_FILES['thumbnail']['name']=='') {
					$image = $data['thumbnail1'];
				}
				else
				   $image = $_FILES['thumbnail']['name'];
				}
			$data_insert = [
				'title' => $data['title'],
				'description' => $data['description'],
				'thumbnail' => $image,
				'content' => $data['content'],
				'slug' => $data['slug'],
				'tag' => $data['tag'],
				'view_count' => $data['view_count'],
				'category_id' => $data['category_id'],
				'user_id' => $data['user_id'],
				'created_at' => $data['created_at']
			];
			$post= new Post();
			$posts = $post->fix($data_insert,$data['id']);
			if ($posts == true) {
				setcookie('update',"Update thành công");
			}
			$this->redirect("index.php?type=backend&mod=post&act=index");
		}

		public function delete(){
			$id = $_GET['id'];
			$post_obj = new  Post();
			$post = $post_obj->del($id);
			if ($post == true) {
				setcookie('delete',"Xóa thành công");
			}
			$this->redirect("index.php?type=backend&mod=post&act=index");
		}
 }
 ?>