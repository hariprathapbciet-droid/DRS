
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connected successfully";

?>

