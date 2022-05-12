
<!-- this file is for connecting to the database from the login page so it can validate the login details to sign the user in-->
<?php
session_start();
include "logindb_conn.php";

if(isset($_POST['email']) && isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

#from line 20-29 are select statements to make sure the user has filled all fields
if(empty($email)) {
	header("location:loginindex.php?error=Email is required");
	exit();
}

else if(empty($password)) {
	header("Location:loginindex.php?error=Password is required");
	exit();
}

#sql query for the select columns needed to validate the user
$sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) === 1){
	$row = mysqli_fetch_assoc($result);
    if($row['email'] === $email && $row['password'] === $password) {
    	echo "Logged In!";
    	$_SESSION['email'] = $row['email'];
    	$_SESSION['fname'] = $row['fname'];
    	$_SESSION['id'] = $row['id'];
    	#once the user has inserted correct details it will display the below page
    	header("Location:home.php");
    	exit();

#more error handlers for if the email and password do not match the same user id 
    }
    else{
    	header("Location:loginindex.php?error=Incorrect Email or Password!");
    	exit();
    }
#this will refresh the page and make you try again
}
else{
	header("Location:loginindex.php");
	exit();
}