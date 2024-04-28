<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM todo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["todo"] . "<button class='deleteTodo' data-id='" . $row["id"] . "'>Delete</button></li>";
    }
} else {
    echo "<li>No todos found</li>";
}
$conn->close();
?>