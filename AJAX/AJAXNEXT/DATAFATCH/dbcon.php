
<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


