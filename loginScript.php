<?php require_once "includes/header.php"; ?>


	<div class="login-container">
		<div class="login_head">
			<h3>Demo Login</h3>
		</div>

		<div class="login-contents" id="loginContents">
			<?php
				if (isset($_POST["login"])){
					// Pass into validate  class and return result.
					$validate = new validate();
					$username = $validate->check($_POST['username']);
					$password = $validate->check($_POST['password']);
					
					$login = new loginClass();
					echo $login->check($username, $password);
				}else{
					echo "<div class='alert'>Access Denied. Please <a href='index'>Sign In</a>.</div>";
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