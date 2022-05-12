<?php
include("DBworkouts.php");
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
      <link href="diary.css" rel="stylesheet" type="text/css" />
      <script src="diary.js"></script>
  </head>

	
  <body>
    <!---Top navigation bar--->
    <!-- top nav css container-->
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

    <div class="introcontainer"> 
      <h4>  Workout Diary </h4><br>
   </div>  
    

<br><br>
   <!--this is where the user will input each exercise they do -->
		<div class="addexercise">
				<div class="workoutcont">
						<div id="data">
              <form action = "diarycon.php" method="POST" > 
                    <input type="date"   name="date" id="date" placeholder="date">
                    <br><br>
                    <input type="string" name="exercise" id="exercise" placeholder="Exercise">
    								<input type="number" name="sets" id="sets" placeholder="Sets">
    								<input type="number" name="reps" id="reps" placeholder="Reps">
    								<input type="number" name="kg" id="kg" placeholder="kg">
    								<input type="number" name="rpe" id="rpe" placeholder="RPE">
    								<button type="submit"> Add exercise </button>
    		        </div>
              </form>
				</div>
		</div>
    <br>
    <br>

    <!--Displays each workout added to the database from the user -->
			<div class="addexercise">
        <div class="workoutcont">
          <h3> Todays Workout </h3>
          <table class="table table-bordered">
           <thead><tr>
             <th>Date</th>
             <th>Exercise</th>
             <th>Sets</th>
             <th>Reps</th>
             <th>KG</th>
             <th>RPE</th>
           </thead>
           <tbody>

  <!--php code that will retrieve data from the diary database and display-->
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['date']??''; ?></td>
      <td><?php echo $data['exercise']??''; ?></td>
      <td><?php echo $data['sets']??''; ?></td>
      <td><?php echo $data['reps']??''; ?></td>
      <td><?php echo $data['kg']??''; ?></td>
      <td><?php echo $data['rpe']??''; ?></td> 
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
  </body>
  </html>