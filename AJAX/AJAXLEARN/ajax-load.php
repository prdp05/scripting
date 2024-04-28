<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die ("connection failed! " . $conn->connect_error);
}else{
    // echo "connection successfully.";
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

$output = "";
if ($result->num_rows > 0) {

    $output = '<table border="1" width="100%", cellspacing="0", cellpadding="10px">
    <tr>
    <th>ID</th>
    <th>NAME</th>
    </tr>
    </table>';
    while($row = $result->fetch_assoc()) {
        $output . = "<tr><td>{$row["ID"]}</td></tr>"
    }
} else {
    echo "<li>No todos found</li>";
}


$conn -> close();

?>