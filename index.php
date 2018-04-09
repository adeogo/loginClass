<?php require_once "includes/header.php"; ?>

<?php
	if(!empty($_SESSION)){
		header("Location: profile");
	}
?>
	<div class="login-container">
		<div class="login_head">
			<h3>Demo Login</h3>
		</div>

		<div class="login-contents" id="loginContents">
			<form method="POST" action="loginScript" id="loginForm">
				<center>
					<input type="text" name="username" placeholder="&#xf007; Username" autocomplete="off" class="loginInput">
					<input type="password" name="password" placeholder="&#xf023; Password" autocomplete="off" class="loginInput">
				</center>
					<input type="checkbox" name="type" autocomplete="off" value="premium">Premium User
				<center>
					<input type="submit" name="login" value="&#xf090; Login" class="login-button"/>
					<input type="button" value="&#xf0c0; Sign Up" class="login-button" onclick="showForm();" />
				</center>
			</form>
		</div>
		
		<div class="login-footer">
			<footer>
				&copy; Copyright 2018.
			</footer>
		</div>
	</div>

	<div id="signup-container">
		<div class="signup-main">
			<i class="fa fa-times" id="exit" onclick="hideForm();"></i>
			<form method="POST" action="signupScript" id="signupForm">
				<center>
					<input type="text" name="username" placeholder="&#xf007; Username"  autocomplete="off" class="signupInput">
					<input type="password" name="password" placeholder="&#xf023; Password"  autocomplete="off" class="signupInput"><br/>
					<input type="password" name="conPassword" placeholder="&#xf023; Confirm Password"  autocomplete="off" class="signupInput"><br/>	
				</center><br/>
					<input type="checkbox" name="type" autocomplete="off" value="premium">Premium User<br/>
					<center><input type="submit" name="signUp" value="&#xf0c0; Sign Up" class="signup-button"/></center>
					<!-- <input type="reset" value="&#xf090; Login" class="signup-button"  onclick="hideForm();"/> -->
				
			</form>
		</div>
	</div>


<?php require_once "includes/footer.php"; ?>