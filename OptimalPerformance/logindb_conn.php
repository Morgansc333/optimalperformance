<?php

	$sname= "localhost";

	$email= "root";

	$password = "";

	$db_name = "optimalperformance";

	$conn = mysqli_connect($sname, $email, $password, $db_name);

	if (!$conn) {

	    echo "Connection failed!";

}
?>