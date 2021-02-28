<?php 
	class Connection{
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "php_blog";


		public function connect(){
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			if($conn->connect_errno){
				echo "failed to connect to mySQL: " > $conn->connect_errno;
			exit();
			}
			return $conn;
		}
	}

?>