<?php
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "BCA";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM todo WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Todo deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>