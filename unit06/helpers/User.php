<?php 
	require_once "../helpers/Connection.php";
	require_once "../helpers/Query.php";
	class Post extends Query{
		var $table = 'users';
		function getList(){
			$users = $this->select($this->table, [' id', 'name', 'email', 'avatar']);
			return $users;
		}

		function create($data){
			$status = $this->insert($this->table, $data);
			return $status;
		}
	}
?>