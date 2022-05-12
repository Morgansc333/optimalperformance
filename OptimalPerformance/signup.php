<!DOCTYPE html>
<html>
<title>Sign-up page</title>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="script.js" defer></script>
<style>
	body {
		background-color: #20b51b;
		font-family: 'Montserrat', sans-serif;
		margin: 0;
	}
</style>
	<script>
		
	</script>
<head>
	<div class="header">
		<h2>Sign up</h2><br>
		<p2>Please fill in this form to create an account.</p2>
	</div>
</head>
<body>

<!-- this container is used to display the sign up user input fields -->
	<div class="signup-container ">
		
		<!-- connects to the php file that connects to the correct database and table for the data-->
		<form action="signupcon.php" method="POST">
			<div class="signup-container ab">
                
                <!-- php empty field error handlers -->
				<?php if (isset($_GET['error'])) { ?>

	            <p class="error"><?php echo $_GET['error']; ?></p>

	            <?php } ?>
                    
                    <!-- sign up user input fields-->
					<label for="fname"><b>First name</b></label>
					<input type="text" id="fname" name="fname"><br><br>

					<label for="lname"><b>Last name</b></label>
					<input type="text" id="lname" name="lname"><br><br>

					<label for="lname"><b>Email</b></label>
					<input type="text" id="email" name="email"><br><br>

					<label for="lname"><b>Password</b></label>
					<input type="password" id="password" name="password"> <br>

					<a href="loginindex.php" class="pagelink"> Already a User? Login </a>
	<br>
					<!-- sign up form submit button-->
					<input type="submit" value="Submit">
			</div>
		</form>
		
	</div>
</body>

</html>