<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Announce</title>
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
			<?php
			$ID = $_GET['id'];
			echo "<a href=\"./anncs/edit.php?id=" . $ID . "\"><button class=\"btn btn-default btn-event\">修改公告</button></a>";
			echo "\r\n";
			echo "<a href=\"./anncs/delete.php?id=" . $ID . "\" onclick=\"return confirm('使否確定要執行這個動作？');\"><button class=\"btn btn-default btn-event\">刪除公告</button></a>";
			$Text_Name = "./AnncsText/" . $ID . ".txt";
			$file = fopen($Text_Name, "r");
			?>
			<h3 class="title">
				<?php
				global $file;
				echo "<p>".fgets($file)."</p>";
				?>
			</h3>
			<div class="row">	
				<div class="col-md-12 date">
					<?php
					global $file;
					echo "<p>".fgets($file)."</p>";
					?>
				</div>
				
				<div class="col-md-12 announce-content";charset="utf-8">
					<?php
					global $file;
					while(! feof($file))
	  				{
	  					$data = fgets($file);
	  					$data_length = strlen($data);
	  					if ($data_length != 2) echo "<p>".substr($data,0, $data_length-2)."</p>";
	  					else echo "<br>";
	  				}
					fclose($file);
					?>
				</div>
			</div>
		</div>
	</body>
</html>