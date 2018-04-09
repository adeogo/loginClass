<?php
/**
* Database connection
*/
class validate extends database{

public function check($val){
	$data = trim($val);
	$data = htmlspecialchars($val);
	$data = mysqli_real_escape_string($this->conn, $val);
	$data = htmlentities($val);
	$data = strtolower($val);
	return $data;
}

	}


?>