<?php
 #connecting the names of the user put fields and the table column names so the data can go to the correct places
  	$height = $_POST['height'];
  	$weight = $_POST['weight'];
	$age = $_POST['age'];
	$deadliftPB = $_POST['deadliftPB'];
	$squatPB = $_POST['squatPB'];
	$overheadPB = $_POST['overheadPB'];
	$chestPB = $_POST['chestPB'];
	$pullupPB = $_POST['pullupPB'];
	$deadliftG = $_POST['deadliftG'];
	$squatG = $_POST['squatG'];
	$overheadG = $_POST['overheadPB'];
	$chestG = $_POST['chestG'];
	$pullupG = $_POST['pullupG'];

#input fields error handlers to make sure they're all filled in
    if(empty($height)) {
	header("location:pdetails.php?error=Height is required");
		exit();
	}

	else if(empty($weight)) {
		header("location:pdetails.php?error=Weight is required");
		exit();
	}

	else if(empty($age)) {
		header("Location:pdetails.php?error=Age is required");
		exit();
	}

	else if(empty($deadliftPB)) {
		header("Location:pdetails.php?error=Deadlift 1 rep max is required");
		exit();
	}

	else if(empty($squatPB)) {
		header("Location:pdetails.php?error=Squat 1 rep max is required");
		exit();
	}

	else if(empty($overheadPB)) {
		header("Location:pdetails.php?error=Overhead 1 rep max is required");
		exit();
	}

	else if(empty($chestPB)) {
		header("Location:pdetails.php?error=Chest 1 rep max is required");
		exit();
	}

	else if(empty($pullupPB)) {
		header("Location:pdetails.php?error=Pull up pb max is required");
		exit();
	}

	else if(empty($deadliftG)) {
		header("Location:pdetails.php?error=Deadlift 1rpm goal is required");
		exit();
    }

	else if(empty($squatG)) {
		header("Location:pdetails.php?error=Squat 1rpm goal is required");
		exit();
	}

	else if(empty($overheadG)) {
		header("Location:pdetails.php?error=Overhead 1rpm goal is required");
		exit();
	}

	else if(empty($chestG)) {
		header("Location:pdetails.php?error=Chest 1rpm goal is required");
		exit();
	}

	else if(empty($pullupG)) {
		header("Location:pdetails.php?error=Pull up 1rpm goal is required");
		exit();
	}

#connecting to the correct database and table
	$conn = new mysqli('localhost','root','','optimalperformance');
	if($conn->connect_error){
		#connection error handlers
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

		#defining the input data being inserted to the database and the data types
		$stmt = $conn->prepare("insert into pdetails (height, weight, age, deadliftPB, squatPB, overheadPB, chestPB, pullupPB, deadliftG, squatG, overheadG, chestG, pullupG) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ddiddddiddddi", $height, $weight, $age, $deadliftPB, $squatPB, $overheadPB, $chestPB, $pullupPB, $deadliftG, $squatG, $overheadG, $chestG, $pullupG);
		$execval = $stmt->execute();
		echo $execval;
		
		#where the user will be sent once it has gone through all the error handlers 
		header("Location: registeredlogin.php");
		exit();
		#connection closed
		$stmt->close();
		$conn->close();
	}
?>