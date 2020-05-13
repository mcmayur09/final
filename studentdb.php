<html>
<head>
<title>student dashboard</title>
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
	height: 50px;
	transform: translate(300px,-300px);
}
.navlist:hover{
            background-color:#ff9ff3;
            color:white;
}
.logout_button{
	background-color: #ff9ff3;
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
            width: 25%;
            height: 60px;
            font-size:22px;
            line-height: 50px;
            cursor:  pointer;
}
</style>
</head>
<body bgcolor="#730099">
	<img src="studdb.png" height="400" width="400" style="transform: translate(100px,100px);">
	<div class="nav" id="hpwrapper">
		<center><br><h2 style="color:#f368e0;font-size:35px;">&nbsp;&nbsp;&nbsp;&nbsp;WELCOME <?php session_start(); echo strtoupper($_SESSION['named']); ?></h2></center>
		<center></center>
		<br>
            <li class="navlist"><a href="viewatt.php" style="text-decoration: none; color:black;">Attendance</li>
            <li class="navlist"><a href="marks.php" style="text-decoration: none; color:black;">Marks</li>
            <li class="navlist"><a href="times.php" style="text-decoration: none; color:black;">Timetable</li>
			<li class="navlist"><a href="viewnb.php" style="text-decoration: none; color:black;">Notice Board</li>
            <li class="navlist"><a href="examform.php" style="text-decoration: none;color:black;">Exam Form</li>
            <li class="navlist"><a href="payment.php" style="text-decoration: none; color:black;">Payment</li>
            <li class="navlist"><a href="change1.php" style="text-decoration: none; color:black;">Change Info</li>
            <li class="navlist"><a href="icard.php" style="text-decoration: none; color:black;">view ID</li>
		<center><button class="logout_button"><a href="logout.php">
		LOG OUT</a></button></center>
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