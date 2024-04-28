<?php



// Set cookie with name "user" and value "pradeep"
setcookie("user", "Pradeep Banjara", time() + 3600, "/"); // Expire in 1 hour

// Display a message
echo "Cookie is set.";

/*
ADDITIONAL ........... 
// $cookie_name = "user";
// $cookie_value = "Pradeep ";

// setcookie($cookie_name, $cookie_value, time() + (86400), "/");

// if(!isset($_COOKIE[$cookie_name])){
//     echo "Cookie is not set";
// }else{

//     echo $_COOKIE[$cookie_name];
// }
*/

?>
