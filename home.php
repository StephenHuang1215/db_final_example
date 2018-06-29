<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Home</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/announce.css">
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
			<!--Admin-->
			<form method="post" action="anncs/delete.php">
			<a href="anncs/add.php"><button type='button' class="btn btn-default btn-event">新增公告</button></a>
			<button type='submit' class="btn btn-default btn-event"> 刪除勾選的項目</button>
			<h3 class="title">最新公告</h3>
				<div class="row">
					<table class="table">
						<?php
						$servername = "localhost";
		    			$username = "root";
		    			$password = "tonytmwcmk15";
		   				$databasename = "peweek";
		    			$conn = new mysqli($servername, $username, $password, $databasename);
					    if ($conn->connect_error) {
					        die("Connection failed: " . $conn->connect_error);
					    }

					    $sql = "SELECT Announce_ID FROM Announcement ORDER BY Announce_ID DESC";
					    $result = $conn->query($sql);
					    if ($result->num_rows > 0) {
						    while ($row = $result->fetch_assoc()) {
						    	$ID = $row[Announce_ID];
						    	$Text_Name = "./AnncsText/" . $ID . ".txt";
						    	echo "<tr>";
						    	$file = fopen($Text_Name, "r");
						    	$title = fgets($file);
						    	$date = fgets($file);
						    	$date_length = strlen($date);
						    	$date = substr($date,0, $date_length-11);
						    	echo "<td class=\"td-data\" style='padding:23px'>" . $date . "</td>";
						    	echo "<td style='padding:23px'><a href=\"anncs.php?id=" . $ID . "\">" . $title . "</a></td>";
						 		echo "<td><a href='anncs/delete.php?id=" . $ID . "' onclick=\"return confirm('使否確定要執行這個動作？');\"><button type='button' class=\"btn btn-default btn-event\">刪除公告</button></a>";
						 		echo "<td style='padding:23px 18px 18px 18px'><input type='checkbox' name='checkbox[]' value=" . $ID . ">";
						    	echo "</tr>";
						    }
						} else echo "0 results";
						?>			
					</table>
				</div>
			</form>
		</div>
	</body>
</html>