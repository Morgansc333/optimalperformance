<?php
#specify data input names and column names so they can be linked together
	$date = $_POST['date'];
	$exercise = $_POST['exercise'];
	$sets = $_POST['sets'];
	$reps = $_POST['reps'];
	$kg = $_POST['kg'];
	$rpe = $_POST['rpe'];

	#Database connection
	$conn = new mysqli('localhost','root','','optimalperformance');
	if($conn->connect_error){

		#connection error handlers
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

		#outlining the columns and data being inserted and their data types
		$stmt = $conn->prepare("insert into diary (date, exercise, sets, reps, kg, rpe) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiidi", $date, $exercise, $sets, $reps, $kg, $rpe);
		$execval = $stmt->execute();
		echo $execval;

		#this is the page the user will be on once it has been sent to the database
		header("Location: diary.php");
    	exit();

    	#database connection closer
		$stmt->close();
		$conn->close();
	}
?>