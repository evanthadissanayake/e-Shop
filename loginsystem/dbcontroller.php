<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "loginsystem";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}

	function runQuery_Array($query) {
		$result = mysqli_query($this->conn,$query);
		 $num =mysqli_fetch_array($result);
		if(!empty($num))
			return $num;
	}
	
	function runQuery_default($query) {
		$result = mysqli_query($this->conn,$query);
		  
		if(!empty($result))
			return $result;
	}
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>