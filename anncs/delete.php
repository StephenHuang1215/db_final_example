<?php
$servername = "localhost";
$username = "root";
$password = "tonytmwcmk15";
$databasename = "peweek";
$conn = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ID = $_GET['id'];
$sql = "DELETE FROM Announcement WHERE Announce_ID = $ID";

if ($conn->query($sql) === TRUE) echo "<h1 class=\"title\">Delete Successfully!</h3>";
else echo "Error: " . $sql . "<br>" . $conn->error;
?>

<head>
<meta http-equiv="refresh" content="2;url=../home.php">
</head>