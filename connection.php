<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="Contact";                    

error_reporting (E_ALL ^ E_NOTICE);

$con=mysqli_connect($servername, $username, $password,$db);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
