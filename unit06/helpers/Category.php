<?php 
	require_once "../helpers/Connection.php";
	require_once "../helpers/Query.php";
	class Category extends Query{

		var $table = 'categories';
		function getList(){
			$categories = $this->select($this->table, [' id', 'name', 'description', 'thumbnail']);
			return $categories;
		}


		function create($data){
			$status = $this->insert($this->table, $data);
			return $status;
		}
	}
?>