<?php
	$my_var = 100;
	$my_arr = array(1, 2, 4, 56);
	$my_str_arr = array('Hi ', ', ', 'Vasya!');

	echo $my_var;
	echo "<br><hr>";
	echo $my_arr[1];
	echo "<br>";
	echo $my_str_arr[0];
	echo $my_str_arr[1];
	echo $my_str_arr[2];

	$f = array(
		'name' => 'Vasya',
		'age' => 17);

	echo "<br>";
	echo $f['name'];

	include("includes/db.php");

	$tmp_query = mysqli_query($connection, "select * from `test_table`");

	do {
		$str_query = mysqli_fetch_assoc($tmp_query);

		echo "<hr>";

		print_r($str_query);

	} while ($str_query);

	$new_tmp_query = mysqli_query($connection, "select * from `test_table`");

	while( ($record = mysqli_fetch_assoc($new_tmp_query))) {
		echo "<hr>";
		print_r($record);
	}

	echo "<br>";
	echo date("D.d.M.Y");

	echo "<br>";
	echo date("Y-m-d H:i:s");
	echo "<hr>";
	echo time();
	echo "<hr>";

	$str_time = "1970-01-01 00:00:00";

	$str_time_timestamp = strtotime($str_time);

	echo time() - $str_time_timestamp;


	mysqli_close($connection);
?>

<form method="POST" action="form.php">
	<input type="text" placeholder="Your login" name="login">
	<input type="text" placeholder="Your password" name="password">
	<hr>
	<input type="submit" value="Sent">
</form>
















