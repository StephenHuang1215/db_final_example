<?php

$servername = "localhost";
$username = "root";
$password = "tonytmwcmk15";
$databasename = "peweek";
$conn = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Taipei');
$datetime= date("Y/m/d H:i:s");

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSERT INTO Announcement (Announce_Title, Announce_Date)
VALUES ('$title', '$datetime')";
if ($conn->query($sql) === TRUE);
else echo "Error: " . $sql . "<br>" . $conn->error;

$sql = "SELECT Announce_ID FROM Announcement WHERE Announce_Date = '$datetime'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    	$Text_Name = "../AnncsText/" . $row[Announce_ID] . ".txt";
    }
} else echo "0 results";

$file = fopen($Text_Name, "w");
fwrite($file, $title);
fwrite($file, "\r\n");
fwrite($file, $datetime);
fwrite($file, "\r\n");
fwrite($file, $description);
fwrite($file, "  ");
fclose($file);
 
header("Location: ../anncs.php");
exit
	
?>