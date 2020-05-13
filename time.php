<html>
<head>
<title>TimeTable</title>
<link rel="stylesheet" href="style.css">
<style>
#fpwrapper
{
	height: 600px;
	border-radius : 10px;
	background-color: #3742fa;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
#mc
{
	background-color:#2ecc71;
	color:white;
}
</style>
</head>
<body bgcolor="black" text="white">
<div id="fpwrapper">
<center><br><br><br><br><img src="timetable.jpg" height="400" width="400">
<br><br>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<a href="teacherdb.php"><input id="mc" type="button" value="back"></a>
<br>
</div>
</form>
<center><br><br><br><br>
</center>
</body>
</html>