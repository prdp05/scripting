<?php
include('dbcon.php');

// Fatch the data from database
$sql = "SELECT * FROM students order by ID limit 2";
$done = $conn -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Fatch From ajax</title>
</head>
<body>
    <table  border="1" id="Data_Table" aline="center" >
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>GENDER</th>
            <th>EMAIL</th>
            <th>AGE</th>
        </tr>
    </table>

    <?php
    while($row = $done -> fetch_assoc()){
        echo "<tr>
        <td>" . $row[0] . "</td>
        <td>" . $row[1] . "</td>
        <td>" . $row[2] . "</td>
        <td>" . $row[3] . "</td>
        <td>" . $row[4] . "</td>
        <td>" . $row[5] . "</td>
        </tr>";
        $ID = $row[0];
    }
    ?>
    
</body>
</html>