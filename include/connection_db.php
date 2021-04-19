<?php

require_once 'config_db.php';

$connection = mysqli_connect($_host, $_user, $_password, $_database);

unset($_host);
unset($_user);
unset($_password);
unset($_database);
?>