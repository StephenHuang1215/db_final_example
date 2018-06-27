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
			<a href="anncs/add.php"><button class="btn btn-default btn-event">新增公告</button></a>
			<a href="signup.php"><button class="btn btn-default btn-event">刪除公告</button></a>
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
					    	$Text_Name = "./AnncsText/" . $row[Announce_ID] . ".txt";
					    	echo "<tr>";
					    	$file = fopen($Text_Name, "r");
					    	$title = fgets($file);
					    	$date = fgets($file);
					    	$date_length = strlen($date);
					    	$date = substr($date,0, $date_length-11);
					    	echo "<td class=\"td-data\">" . $date . "</td>";
					    	echo "<td><a herf=\"anncs.php\">" . $title . "</a></td>";
					    	echo "</tr>";
					    }
					} else echo "0 results";
						

					?>
					<tr>
						<td class="td-date">2018/09/06</td>
						<td><a href="anncs.php">107學年度上學期 體育週開始報名啦！各系體幹看過來！</a></td>
					</tr>
					<!--<tr>
						<td class="td-date">2018 / 09 / 05</td>
						<td><a href="anncs.php">107學年度 各系體幹名單</a></td>
					</tr>
					<tr>
						<td class="td-date">2018 / 09 / 06</td>
						<td><a href="anncs.php">107學年度 班代注意事項</a></td>
					</tr>
					<tr>
						<td class="td-date">2017 / 09 / 06</td>
						<td><a href="anncs.php">106學年度 交換學生太多之取消名單</a></td>
					</tr>
					<tr>
						<td class="td-date">2017 / 09 / 05</td>
						<td><a href="anncs.php">106學年度 系學會徵才</a></td>
					</tr>
					<tr>
						<td class="td-date">2017 / 09 / 06</td>
						<td><a href="anncs.php">106學年度 沒導聚的學生不用擔心，系辦照顧你</a></td>
					</tr>-->
				</table>
			</div>
		</div>
	</body>
</html>