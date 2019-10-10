<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "mysql";
$db_name = "bincom_test";


// create mysqli object

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


//Error Handler

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
 }
 echo 'Connected successfully<br>';
 ?>