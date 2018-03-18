<?php


class database{
	private $dbHost = "localhost";
	private $dbUser = "login_admin";
	private $dbPass = "login_admin";
	private  $dbName = "login";
	public  $conn;

	public function __construct(){
		$this->conn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
	}
}



?>