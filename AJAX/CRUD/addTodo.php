<?php

    $todo = $_POST['todo'];
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bca";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO todo (todo) VALUES ('$todo')";

    if ($conn->query($sql) === TRUE) {
        echo "Todo added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>