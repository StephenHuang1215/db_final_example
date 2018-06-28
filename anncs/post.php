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

$ID = $_GET['id'];
if ($ID == 0);
else {
	$sql = "DELETE FROM Announcement WHERE Announce_ID = $ID";
	if ($conn->query($sql) === TRUE);
	else echo "Error: " . $sql . "<br>" . $conn->error;
}

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
    	$ID = $row[Announce_ID];
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

$target_dir = "./picture/";
$uploadOk = 1;
if($_FILES["fileToUpload"]["name"]) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check == false) $uploadOk = 0;
	if ($_FILES["fileToUpload"]["size"] > 500000) $uploadOk = 0;
	if ($uploadOk == 0); 
	else {
		$target_file = $target_dir . $ID . '.jpg';
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	}
}
 
header("Location: ../home.php");
exit
	
?>