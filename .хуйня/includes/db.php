<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_test_db');

	if($connection) {
		//echo "start connection<br>";
	}
	else {
		echo "not start connection<br>";
		echo mysqli_connect_error();
		exit();
	}
?>