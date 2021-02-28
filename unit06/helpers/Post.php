<?php 
	require_once "../helpers/Connection.php";
	require_once "../helpers/Query.php";
	class Post extends Query{
		var $table = 'posts';
		function getList(){
			$posts = $this->select($this->table, [' id', 'title', 'description', 'thumbnail']);
			return $posts;
		}

		function create($data){
			$status = $this->insert($this->table, $data);
			return $status;
		}
	}
?>