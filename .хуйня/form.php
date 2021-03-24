<?php

// as metod = "GET"
// $_GET

// as metod = "POST"
// $_POST
	
	include("includes/db.php");

	echo "Hello friend<hr>";

	$login = $_POST["login"];
	$password = $_POST["password"];

	$count = mysqli_query($connection, "select * from `users` where `login` = '$login' and `password` = '$password'");

	if(mysqli_num_rows($count) == 0) {
		echo "You are not have $login account or wrong password!";
	}
	else {
		echo "You have $login account!";
	}

	

	echo "<hr>";
	
?>
