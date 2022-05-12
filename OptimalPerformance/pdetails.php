<!DOCTYPE html>
<html>
<title>Personal details</title>
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
<head>
	<div class="header">
		<h2> Personal Details</h2><br>
		<p2>Please fill in this form to optimise your account</p2>
	</div>
</head>
<body>


	<div class="signup-container ">
		<form action="pdetailscon.php" method="POST">			<div class="signup-container ab">

                <!-- the empty field error handlers-->
                <?php if (isset($_GET['error'])) { ?>

	            <p class="error"><?php echo $_GET['error']; ?></p>

	            <?php } ?>
                <!-- input fields for personal details.-->
				<label for="fname"><b>Height</b></label>
				<input type="text" id="height" name="height"><br>

				<label for="lname"><b>Weight</b></label>
				<input type="text" id="weight" name="weight"><br>

				<label for="lname"><b>Age</b></label>
				<input type="text" id="age" name="age"><br><br><br>

				
				<label for="lname"><b>Deadlift 1 Rep Max</b></label>
				<input type="text" id="deadliftPB" name="deadliftPB"><br>

				<label for="lname"><b>Squat 1 Rep Max</b></label>
				<input type="text" id="squatPB" name="squatPB"><br>

				<label for="lname"><b>Overhead Press 1 Rep Max</b></label>
				<input type="text" id="overheadPB" name="overheadPB"><br>

				<label for="lname"><b>Chest 1 Rep Max</b></label>
				<input type="text" id="chestPB" name="chestPB"><br>

				<label for="lname"><b>Pull Up Max</b></label>
				<input type="text" id="pullupPB" name="pullupPB"><br><br><br>

				

				<label for="lname"><b>Deadlift 1 RPM Goal</b></label>
				<input type="text" id="deadliftG" name="deadliftG"><br>

				<label for="lname"><b>Squat 1 RPM Goal</b></label>
				<input type="text" id="squatG" name="squatG"> <br>

				<label for="lname"><b>Overhead Press 1 RPM Goal</b></label>
				<input type="text" id="overheadG" name="overheadG"><br>
				
				<label for="lname"><b>Chest 1 RPM Goal</b></label>
				<input type="text" id="chestG" name="chestG"><br>

				<label for="lname"><b>Pull Up Max Goal</b></label>
				<input type="text" id="pullupG" name="pullupG"><br>

                <!-- personal details form submit button-->
				<input type="submit" value="Submit">
			</div>
		</form>
		
	</div>
</body>

</html>