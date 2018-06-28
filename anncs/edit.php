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
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/announce.css">
		<link rel="stylesheet" href="../css/add.css">



	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" sdata-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">N C T U &nbsp;&nbsp; S p o r t s</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-link">
						<li class="active"><a href="../home.php">首頁 <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li><a href="../events.php">活動列表 <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li><a href="../login.php">登入 <span class="sr-only">(current)</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container announce-wrapper">
			<!--Admin-->
			<h3 class="title">修改公告</h3>
			<br>
			<?php
			$ID = $_GET['id'];
			echo "<form action='post.php?id=" . $ID . "'method='post'>";
			echo "<h5 class='add_header'>標題</h5>";	
			$Text_Name = "../AnncsText/" . $ID . ".txt";
			$file = fopen($Text_Name, "r");
			echo "<input type='text' name=title class='add_title' value='";
			echo fgets($file) . "'><br><br>";
			?>
			<h5 class="add_header">內容</h5>
			<?php
			global $file;
			echo "<textarea name=description class='add_description'>";
			fgets($file);
			while(! feof($file)) echo $data = fgets($file);
  			echo "</textarea><br><br>";
			?>
			<button type='button' class="btn btn-default btn-event" onclick = "window.location.href='../home.php'"> 取消</button>
			<button type='submit' class="btn btn-default btn-event"> 儲存</button>
			</form>
			</div>
		</div>
	</body>
</html>