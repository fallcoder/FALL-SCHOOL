<?php

// connect with the databases
$conn = mysqli_connect('localhost', 'root', '', 'fall_school', '3306'); 
if (!$conn) {
    die("database connexion failed" . mysqli_error($conn));
}

$select_db = mysqli_select_db($conn, 'fall_school');
if (!$select_db) {
    die("database selected failed" . mysqli_error($conn));
}


?>