<!DOCTYPE html>
<html>
      <meta charset="utf-8">
      <title>log-in page</title>
      <link href="style.css" rel="stylesheet" type="text/css" />
  <head>
    <div class="header">
        <h2>Log in</h2>
        <p2>Please fill in your details to access your account</p2>
    </div>
  </head>
  <style>
  body {
	background-color: #20b51b;
	font-family: 'Montserrat', sans-serif;
  margin: 0;
}
 </style>
  <body>
    <!--this container is used to display the input fields to login -->
    <div class="signup-container ">
      <form action="login.php" method="post">
        <div class="signup-container ab">

            <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>

              <!-- user input field-->
              <label  for="email"><b>Email</b></label>
              <input type="text" id="email" name="email"><br>
        
              <label  for="password"><b>Password</b></label>
              <input type="password" id="password" name="password"> <br>

					    <a href="signup.php" class="pagelink"> Not already a User? Sign Up </a>
<br>
					     <!-- login form submit button-->
              <input type="submit"><br><br>
          </div>
      </form>
    </div>
  </body>
</html>
