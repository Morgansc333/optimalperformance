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

<!-- recommended changes container to display data from exercise data-->
    <div class="introcontainer"> 
      <h4>  Recommended Changes to Workouts </h4><br>
   </div>  
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
    <div>
      <h3>For your next workout</h3>
      
     </body>
     </html>