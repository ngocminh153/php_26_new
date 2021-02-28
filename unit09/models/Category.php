<?php 
	require_once "core/Model.php";
	class Category extends Model{

		var $table = 'categories';
		function getList(){
			$categories = $this->select($this->table, [' id', 'name', 'description', 'thumbnail']);
			return $categories;
		}


		function create($data){
			$status = $this->insert($this->table, $data);
			return $status;
		}
		public function find($id){
			$category = $this->getId($this->table, $id);
			return $category;
		}

		public function fix($data,$id){
			$status = $this->update($this->table,$data,$id);
			return $status;
		}

		public function del($id){
			$status = $this->delete($this->table,$id);
			return $status;
		}
	}
?>