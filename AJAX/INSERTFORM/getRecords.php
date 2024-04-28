<?php
// Check if the name field is set and not empty
//if(isset($_POST['name']) && !empty($_POST['name'])) {
    // Database connection

    require "connection.php";

    // Retrieve records from the database
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["NAME"]. "<br>";
    }
} else {
    echo "0 results";
}

    // Prepare SQL statement to insert data into the database
    $name = $_POST['name'];
    $ID = $_POST['ID'];
    $sql = "INSERT INTO student (ID, NAME) VALUES ('$ID', '$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Close the database connection
//}
?>