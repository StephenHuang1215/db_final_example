<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="refresh" content="2;url=../home.php">
		<title>Home</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/announce.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">N C T U &nbsp;&nbsp; S p o r t s</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-link">
						<li class="active"><a href="home.php">首頁 <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li><a href="events.php">活動列表 <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li><a href="login.php">登入 <span class="sr-only">(current)</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container announce-wrapper">
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
		if ($ID != 0) {
			$sql = "SELECT Announce_title FROM Announcement WHERE Announce_ID = $ID";
		    $result = $conn->query($sql);

			$sql = "DELETE FROM Announcement WHERE Announce_ID = $ID";

			if ($conn->query($sql) === TRUE) {
				if ($result->num_rows > 0) {
			    	while ($row = $result->fetch_assoc()) {
			    		echo "<h3 class=\"title\">\"" . $row[Announce_title] . "\" 刪除成功</h3>";
			    	}
				}
			}
			else echo "Error: " . $sql . "<br>" . $conn->error;
		}
		else {
			$check=$_POST['checkbox'];
			foreach($check as $value){
				$sql = "SELECT Announce_title FROM Announcement WHERE Announce_ID = $value";
		    	$result = $conn->query($sql);

		 		$sql = "DELETE FROM Announcement WHERE Announce_ID = $value";

				if ($conn->query($sql) === TRUE) {
					if ($result->num_rows > 0) {
			    		while ($row = $result->fetch_assoc()) {
			    			echo "<h3 class=\"title\">\"" . $row[Announce_title] . "\" 刪除成功</h3>";
			    		}
					}
				}
				else echo "Error: " . $sql . "<br>" . $conn->error;
		 	}
		}
		?>
		</div>
	</body>
</html>