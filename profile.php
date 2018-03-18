<?php require_once "includes/header.php"; ?>
<?php require_once "includes/session.php"; ?>


	<div class="profileContainer">

		<div class="profileHead">
			<div>Demo Login<span style="float: right;"><i class="fa fa-user"></i> <?php echo $_SESSION['login']; ?> <a href="logout"><i class="fa fa-sign-out"></i>Logout</a></span></div>
		</div>

		<div class="profileContents">
			
		</div>

		<div class="profileFooter">

		</div>




	</div>

	<!-- <div class="login-container">
		<div class="login_head">
			<h3>Demo Login profile</h3>
		</div>

			

		<div class="login-contents" id="loginContents">
			<pre>
				
			</pre>


		</div>
		
		<div class="login-footer">
			<footer>
				&copy; Copyright 2018.
			</footer>
		</div>
	</div> -->

<?php require_once "includes/footer.php"; ?>