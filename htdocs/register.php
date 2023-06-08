<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>

<head>
	<title>Welcome to The Social Net!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>

<body>

	<?php 

	if(isset($_POST['register_button'])){
		echo '
		<script>

		$(document).ready(function(){
			$("#first").hide();
			$("#second").show();
		});

		</script>

		';
	}

	
	?>

	<div class="wrapper">
		<div class="login_box">
			<div class="login_header">
				<h1>The Social Net</h1>
				Login or signup
			</div>

			<div id="first">
				<form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder="Email Address" value="<?php
					if (isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					}
					?>" required>
					<br>
					<input type="password" name="log_password" placeholder="Password" id="password">
					<img src="assets\images\icons\eye-close.png" alt="show password" id="eyeicon">
					<br>
					<?php if (in_array("Email or password was incorrect<br>", $error_array))
						echo "Email or password was incorrect<br>"; ?>
					<input type="submit" name="login_button" value="Login">
					<br>

					<a href="#" id="signup" class="signup">Need an account? Register now!</a>

				</form>
			</div>

			<script>
			let eyeicon = document.getElementById("eyeicon");
			let password = document.getElementById("password");

			eyeicon.onclick = function(){
				if(password.type == "password"){
					password.type = "text";
					eyeicon.src = "assets/images/icons/eye-open.png";
				}
				else{
					password.type = "password";
					eyeicon.src = "assets/images/icons/eye-close.png";
				}
			}


			</script>


			<div id="second">

				<form action="register.php" method="POST">
					<input type="text" name="reg_fname" placeholder="First Name" value="<?php
					if (isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					}
					?>" required>
					<br>
					<?php if (in_array("Your first name must be between 2 and 25 characters<br>", $error_array))
						echo "Your first name must be between 2 and 25 characters<br>"; ?>

					<input type="text" name="reg_lname" placeholder="Last Name" value="<?php
					if (isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					}
					?>" required>
					<br>
					<?php if (in_array("Your last name must be between 2 and 25 characters<br>", $error_array))
						echo "Your last name must be between 2 and 25 characters<br>"; ?>

					<input type="email" name="reg_email" placeholder="Email" value="<?php
					if (isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					}
					?>" required>
					<br>

					<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php
					if (isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					}
					?>" required>
					<br>
					<?php if (in_array("Email already in use<br>", $error_array))
						echo "Email already in use<br>";
					else if (in_array("Invalid email format<br>", $error_array))
						echo "Invalid email format<br>";
					else if (in_array("Emails don't match<br>", $error_array))
						echo "Emails don't match<br>"; ?>


					<input type="password" name="reg_password" placeholder="Password" required id="password2">
					<img src="assets\images\icons\eye-close.png" alt="show password" id="eyeicon2">
					<br>
					<input type="password" name="reg_password2" placeholder="Confirm Password" required id="password3">
					<img src="assets\images\icons\eye-close.png" alt="show password" id="eyeicon3">
					<br>
					<?php if (in_array("Your passwords do not match<br>", $error_array))
						echo "Your passwords do not match<br>";
					// else if (in_array("Your password can only contain english characters or numbers<br>", $error_array))
					// 	echo "Your password can only contain english characters or numbers<br>";
					// else if (in_array("Your password must be betwen 5 and 30 characters<br>", $error_array))
					// 	echo "Your password must be betwen 5 and 30 characters<br>"; 
					?>


					<input type="submit" name="register_button" value="Register">
					<br>

					<?php if (in_array("<span style='color: #8a5000;'>You're all set! Go ahead and login!</span><br>", $error_array))
						echo "<span style='color: #8a5000;'>You're all set! Go ahead and login!</span><br>"; ?>
					<a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>

				</form>

			</div>

			<script>
				let eyeicon2 = document.getElementById("eyeicon2");
				let password2 = document.getElementById("password2");

				eyeicon2.onclick = function(){
					if(password2.type == "password"){
						password2.type = "text";
						eyeicon2.src = "assets/images/icons/eye-open.png";
					}
					else{
						password2.type = "password";
						eyeicon2.src = "assets/images/icons/eye-close.png";
					}
				}
			
				let eyeicon3 = document.getElementById("eyeicon3");
				let password3 = document.getElementById("password3");

				eyeicon3.onclick = function(){
					if(password3.type == "password"){
						password3.type = "text";
						eyeicon3.src = "assets/images/icons/eye-open.png";
					}
					else{
						password3.type = "password";
						eyeicon3.src = "assets/images/icons/eye-close.png";
					}
				}
			
			</script>



		</div>

	</div>


</body>

</html>