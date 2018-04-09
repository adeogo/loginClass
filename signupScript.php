<?php require_once "includes/header.php"; ?>


	<div class="login-container">
		<div class="login_head">
			<h3>Demo Login</h3>
		</div>

		<div class="login-contents" id="loginContents">
			<?php
				if (isset($_POST["signUp"])){
					// Pass into validate  class and return result.
					$validate = new validate();
					$username = $validate->check($_POST['username']);
					$password = $validate->check($_POST['password']);
					$conPassword = $validate->check($_POST['conPassword']);

						if(isset($_POST['type'])){
							$type = $validate->check($_POST['type']);
						}else{
							$type = "logintable";
						}

					$register = new register();
					echo $register->insert($username, $password, $conPassword, $type);
				}else{
					echo "<div class='alert'>Access Denied. Please <a href='index'>Sign Up</a>.</div>";
				}



			?>
		</div>
		
		<div class="login-footer">
			<footer>
				&copy; Copyright 2018.
			</footer>
		</div>
	</div>

<?php require_once "includes/footer.php"; ?>