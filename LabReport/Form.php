<!DOCTYPE html>
<html>
<head>
    <title>Form Processing</title>
</head>
<body>
    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
    }



    echo "<h2>Using POST method:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";

   
    ?>
</body>
</html>
