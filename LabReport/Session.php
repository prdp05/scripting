<?php
// Start a session
session_start();

// Set session variables
$_SESSION["username"] = "Pradeep_Banjara";
$_SESSION["email"] = "Pradeepbanjara92@gmail.com";

// Display a message
echo "Session variables are set.";



/*
ADDITIONAL ...............
session_start();

if(isset($_SESSION["username"])){
    echo "the person is " . $_SESSION["username"];
}
print_r($_SESSION);

session_unset();

session_destroy();
*/

?>

