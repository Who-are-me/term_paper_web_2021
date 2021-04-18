<?php

$connection = mysqli_connect('localhost', 'root', '', 'db_course_work');

if ($connection === false) {
    echo mysqli_connect_error();
    exit();
}

$query = "select password from accounts where login = '" . $_POST['login']. "'";

$result = mysqli_query($connection, $query);

$cat = mysqli_fetch_assoc($result);

if(empty($cat)) {
    echo file_get_contents("index.html");
    exit();
}


if(md5($_POST['password']) === $cat['password']) {
    echo "yes";
}
else {
    echo "no";
}





















mysqli_close($connection);