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

    <!-- this file is used to login once the user has created an account it links from the personal details page-->
    <div class="signup-container ">
      <form action="login.php" method="post">
        <div class="signup-container ab">

           <!-- displaying to the user that the account has been created -->
          <h2>You have now created an account! please log in with your details. </h2>

            <!-- php error handlers-->
            <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>
      
              <!-- login user input fields -->
              <label  for="email"><b>Email</b></label>
              <input type="text" id="email" name="email"><br>
        
              <label  for="password"><b>Password</b></label>
              <input type="password" id="password" name="password"> <br>

					    <a href="signup.php" class="pagelink"> Not already a User? Sign Up </a>
<br>
					
              <input type="submit"><br><br>
          </div>
      </form>
    </div>
  </body>
</html>
