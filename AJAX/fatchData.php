
<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "bca";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// Fatch the data from database
$sql = "SELECT * FROM student";
$done = $conn -> query($sql);

// prepare for the response
$data = array();
if($done -> num_rows > 0){
    while($row = $done -> fetch_assoc()){
        $data[] = $row;
    }
}

$jsonData = json_encode($data);
header('Content-Type: Application/json');
echo $jsonData;
?>