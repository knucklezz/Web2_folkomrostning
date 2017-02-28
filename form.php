<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "folkom";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO formdata (firstname, lastname, mail, ort)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[mail]', '$_POST[ort]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>