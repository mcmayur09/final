<html>
<head>
<title>staff dashboard</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
#hpwrapper{
	height: 350px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 850px;
	margin: 0 auto;
	opacity:0.8;
}
.nav{
	background-color:blue;
	height: 5px;
	transform: translate(300px,-200px);
}
.navlist:hover{
            background-color:#f6e58d;
            color:white;
}
.logout_button{
	background-color: #f6e58d;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 80%;
	font-size:26px;
	font-weight: bold;
	border-radius: 20px;
	transform: translateY(50%);
	border: 0px solid #f1f1f1;
}
.navlist{
            text-align: center;
            float: left;
            list-style-type: none;
            width: 50%;
            height: 60px;
            font-size:22px;
            line-height: 50px;
            cursor:  pointer;
}
</style>
</head>
<body bgcolor="#5e5008">
		<img src="staffdb.png" height="400" width="400" style="transform: translate(200px,200px);">
		<div class="nav" id="hpwrapper"><center><br><h2 style="color:#f6e58d;font-size:35px;">&nbsp;&nbsp;&nbsp;&nbsp;WELCOME <?php session_start(); echo strtoupper($_SESSION['named']); ?></h2></center>
		<center>
		<br>
            <li class="navlist"><a href="viewta.php" style="text-decoration: none; color:black;">Attendance</li>
			<li class="navlist"><a href="viewnbs.php" style="text-decoration: none; color:black;">Notice Board</li>
		<button class="logout_button"><a href="logout.php">
		LOG OUT</a></button>
	</center>
		</form>
	</div>
</body>
</html>
<?php
if(!isset($_SESSION['loged']))
{
	if($_SESSION['loged']==0)
	header('Location:notlog.php');
}
?>