<?php

$smartProgress = new mysqli('127.0.0.1', 'root', '', 'smartprogress');
if ($smartProgress->connect_errno) {
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
}

require_once("./MVC/view/mainView.php");

?>
