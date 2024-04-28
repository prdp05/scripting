<?php
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "Pradeep"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a table
$sql_create_table = "CREATE TABLE Pradeep(
                        ID INT, PRIMARY KEY,
                        Name VARCHAR(255) NOT NULL,
                        District VARCHAR(890),
                        Email VARCHAR(50),
                        Phone INT
                    )";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'users' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL query to insert values into the table
$sql_insert_values = "INSERT INTO pradeep (ID, Name, District, Email, Phone) 
    VALUES 
                        ('1', 'Pradeep', 'Lalitpur' , 'pradeepbanajara92@gmail.com', '9800000000'),
                        ('2', 'Suman', 'Kathamandu', 'Sumanghimire202@gmail.com', '9800000000'),
                        ('3', 'Suzan', 'Bhakatapur','Suzanghimire89@gmail.com', '9800000000')";

if ($conn->query($sql_insert_values) === TRUE) {
    echo "Values inserted successfully.<br>";
} else {
    echo "Error inserting values: " . $conn->error;
}


// Close connection
$conn->close();

?>
