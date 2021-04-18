<?php

$connection = mysqli_connect('localhost', 'root', '', 'db_course_work');

if ($connection === false) {
    echo mysqli_connect_error();
    exit();
}

$query = "select password from accounts where login = '" . $_POST['login']. "'";

$result = mysqli_query($connection, $query);

$cat = mysqli_fetch_assoc($result);

if(empty($cat) || (md5($_POST['password']) !== $cat['password'])) {
    mysqli_close($connection);
    echo file_get_contents("re-sign.html");
    exit();
}
else {
    mysqli_close($connection);
    header( "Location: adminpanel.php" );
}
?>