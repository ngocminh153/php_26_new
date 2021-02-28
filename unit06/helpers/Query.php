<?php 
	require_once "../helpers/Connection.php";
	class Query{
		// private $conn;

		// public function __construct(){
  //       	$connection = new Connection();
		// 	// $connection->password ='sss';
		// 	$conn = $connection->connect();
  //   	}
		protected function select($table, $columns = '*'){

		// $query = "SELECT * FROM table";

		if($columns == '*'){
			$query = "SELECT * FROM table";
		}else if (is_array($columns)){
			$sub_string = '';
			foreach ($columns as $i => $column) {
				$sub_string .= $column;

				if ($i+1 != count($columns)) {
					$sub_string .= ',';
				}
			}
			$query = 'SELECT' . $sub_string . " FROM "  .$table;
		}else{
			exit();
		}
 
		$connection = new Connection();
		$conn = $connection->connect();

		$result = $conn->query($query);

		$data = array();

		while ($row = $result->fetch_assoc()) {
			$data[]= $row;
		}

		return $data;
		}


		protected function insert($table, $data){
		$query = "INSERT INTO $table";
		$string_1 = '';
		$string_2 = '';

		$i = 0;

		foreach ($data as $column => $value) {
			$i++;

			$string_1 .= $column;
			if ($i != count($data)) {
				$string_1 .= ',';
			}

			$string_2 .= "'" . $value . "'";
			if ($i != count($data)) {
				$string_2 .= ',';
			}

		}

		$string = '(' . $string_1 . ')'   .   ' VALUE '   .  '(' . $string_2 . ')';

		$query = $query . $string;

		$connection = new Connection();
		$conn = $connection->connect();
		$status = $conn->query($query);


		return $status;
	}
	}
?>