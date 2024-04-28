<?php

if(isset($_GET['uname']) && isset($_GET['surname'])){

    $uname = $_GET['uname'];
    $surname = $_GET['surname'];

    echo "Your name is: $uname and your surname is: $surname";
}

?>