<!-- login session php code -->
<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
	?>

	<!DOCTYPE html>
<html>

  <head>
    <style>
      html {
  scroll-behavior: smooth;
}
    </style>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Landing page</title>
      <link href="home.css" rel="stylesheet" type="text/css" />
      <script src="home.js" defer></script>
  </head>
   <body>

        <!---Top navigation css contianer bar--->
         <div class="topnav">
           <h3>Optimal Performance</h3>

           <!--logout of account button -->
            <a href="logout.php">Log out </a>

          <!--Link to info/help page -->
            <a href="info.html">i</a>

          <!-- link to recommended workout page -->
            <a href="recommworkout.php">Recommended workouts</a>  

          <!-- link to diary page -->
            <a href="diary.php">Workout Diary</a>  

          <!-- link to home page -->
            <a href="home.php">Home</a>
         </div> 

         <!--top introdution to user-->
         <div class="introcontainer"> 
             <h4>  Welcome to Optimal Performance! </h4><br>
         </div>  
     
         <div class="toppanel">
           <p1> This is the home page from here you can access your workout diary, your recommended workouts, BMI Calculator and many more features. If you have any queries please use the I for information button at the top right of this page. 
            </p1>
         </div>

        <!--BMI calculator for user inputted data -->
        <div class="BMIcontainer">
        <br> <h5>BMI Calculator</h5>
                    <label>
                      <input id="h-input" type="number" placeholder="Enter Your Height in Centimeters: ">
                    </label>     
          
                    <label>
                          <input id="w-input" type="number" placeholder="Enter Your Weight in Kilogrames: ">
                    </label>            
            
                    <button type="submit" onclick="Calculate()">Calculate BMI</button>

                    <div class="bmi-value">
                      <h2>BMI Value: </h2>
                      <div id="bmi-output"></div>
                    </div>
        <br>
                    <div class="status">
                        <h2>Status: </h2>
                        <div id="bmi-status"></div>
                    </div>   
              </div>

     <!--Maintenance calories calculator  -->
        <div class="Caloriecontainer">
          <h5> Maintenance Calorie Calculator</h5>
                       <label>
                         <input id="he-input" type="number" placeholder="Enter Your Height in Centimeters:">
                       </label>
          
                       <label>
                         <input id="we-input" type="number" placeholder="Enter Your Weight in Pounds:">
                       </label>
          
                       <button type="submit" onclick="CalculateCal()">Calculate Maintenance Calories</button>
                       <div class="cal-value"> 
                         <h2>Maintenance Calories:</h2>
                         <div id="Cal-output"></div>
                       </div>
          <br>
        </div>
   </body>
</html>

<!-- logout session php code -->
<?php 
}
else {
  header("loginindex.php");
  exit();
}
?>