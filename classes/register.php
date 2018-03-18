<?php
/**
* Database connection
*/
class register extends database{

	public function insert($username, $password, $conpass){

		$checkUsernameQuery = "SELECT * FROM ";
		$checkUsernameQuery .= "logintable ";
		$checkUsernameQuery .= "WHERE username = '{$username}' ";

		$checkUsername = mysqli_query($this->conn, $checkUsernameQuery);

		if($username && $password && $conpass){

			if($conpass === $password){

				$countUsername = mysqli_num_rows($checkUsername);

				if($countUsername != 0){

					$result = "<div class='alert'>Username already exist!</div>";
				}else{

					$query = "INSERT INTO logintable(username, password) ";
					$query .= "VALUES('{$username}', '{$password}') ";

					$run = mysqli_query($this->conn, $query);

					if($run){

						$result = "<div class='alert'>Sign up successful. <a href='index'>Login</a>.</div>";
					}else{
						$result = "<div class='alert'>Sign up failed. Please try again</div>";
					}
				}

			}else{
				$result = "<div class='alert'>Passwords do not match!</div>";
			}
		}else{
			$result = "<div class='alert'>Please fill all fields!</div>";
		}

		return $result;
	}

}


?>