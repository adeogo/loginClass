<?php
/**
* Database connection
*/
class loginClass extends database{

	public function check($username, $password, $table){

		$checkUsernameQuery = "SELECT * FROM ";
		$checkUsernameQuery .= "{$table} ";
		$checkUsernameQuery .= "WHERE username = '{$username}' ";

		$checkUsername = mysqli_query($this->conn, $checkUsernameQuery);

		if($username && $password){
			$countUsername = mysqli_num_rows($checkUsername);
			if($countUsername != 0){
				while($dbRow = mysqli_fetch_assoc($checkUsername)){
					$dbUsername = $dbRow['username'];
					$dbPassword = $dbRow['password'];
				}
				if($username === $dbUsername){
					if($password === $dbPassword){
						$_SESSION['login'] = "{$username}";
						header("Location: profile");
					}else{
						$result = "<div class='alert'>Incorrect Password. Please try again.</div>";
					}
				}else{
					$result = "<div class='alert'>Invalid Username. Please try again.</div>";
				}
			}else{
				$result = "<div class='alert'>Username does not exist!</div>";
			}
		}else{
			$result = "<div class='alert'>Please fill all fields!</div>";
		}

	return $result;
	}

}


?>