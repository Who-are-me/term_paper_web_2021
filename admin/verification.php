<?php

require_once '../include/connection_db.php';

if ($connection === false) {
    echo mysqli_connect_error();
    exit();
}

if(empty($_POST)) {
    header( "Location: re-sign.html" );
    exit();
}

$query = "select password from accounts where login = '" . $_POST['login']. "'";
$result = mysqli_query($connection, $query);
$cat = mysqli_fetch_assoc($result);

session_start();

// if $cat(array a query) is not empty and password is a true, then session start
if(empty($cat) || (md5($_POST['password']) !== $cat['password'])) {
    unset($cat);
    mysqli_close($connection);
    $_SESSION["verification"] = false;
    header( "Location: re-sign.html" );
    exit();
}
else {
    mysqli_close($connection);  
    unset($cat);
    $_SESSION["login"] = $_POST["login"];
    $_SESSION["verification"] = true;
    header( "Location: adminpanel.php" );
    exit();
}
?>