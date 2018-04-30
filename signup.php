<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Sign up</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/event.css">
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
						<li><a href="home.php">首頁 <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li class="active"><a href="events.php">活動列表 <span class="sr-only">(current)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-link">
						<li><a href="login.php">登入 <span class="sr-only">(current)</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container event-wrapper">
			<div class="signup-form">
				<h3 class="text-center">活動報名：泡泡足球</h3>
				<div class="description">
					<p>每隊上限：10</p>
					<p>隊伍上限：20</p>
					<p>已報名隊伍：3 隊</p>
					<p class="warning">尚可報名：17 隊</p>
				</div>
				<br>
				<label class="text-center" for="team_name">隊伍名稱</label>
				<input type="text" id="team_name" name="team_name" class="form-control" value="MHW Pro">
				<br>
				<label class="text-center" for="team_name">隊伍人員</label>
				<table class="table">
					<tr>
						<th class="student-id">隊員學號</th>
						<th>姓名</th>
						<th></th>
					</tr>
					<tr>
						<td class="student-id">0513579</td>
						<td>要堅強</td>
						<td class="text-right"><button class="btn btn-new" style="margin-right:30px">修改</button><button class="btn btn-remove">取消</button></td>
					</tr>
					<tr>
						<td class="student-id"><input type="text" name="student_id" class="form-control"></td>
						<td></td>
						<td class="text-right"><button class="btn btn-new" style="margin-right:30px">新增隊員</button></td>
					</tr>
				</table>
				<div class="text-left form-bottom">
					<button class="btn btn-default">提交報名表</button>
				</div>
			</div>
		</div>
	</body>
</html>