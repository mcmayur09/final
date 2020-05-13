<html>
<head>
<title>TimeTable</title>
<link rel="stylesheet" href="style.css">
<style>
#fpwrapper
{
	height: 400px;
	border-radius : 10px;
	background-color: #9999ff;//#3742fa;
	border: 3px solid #f1f1f1;
	width: 600px;
	margin: 0 auto;
}
#mc
{
	background-color:#2ecc71;
	color:white;
}
td
{
	height:50;
	width:80;
	color:BLACK;
	background:white;//#99ffff;
	text-align:center;
	font-size:20;
}
</style>
</head>
<body bgcolor="#99ffd6" text="white">
<div id="fpwrapper">
<center><br><br><br>
<br><br>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<a href="principaldb.php"><input id="mc" type="button" value="back"></a>
<br><br><br><br>
<table border="1">
<?php

  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    $value="SELECT * FROM timetable";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
            echo "<tr><td>Time</td><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td><td>Saturday</td></tr>";
            echo "<tr><td>8:30 - 9:30</td>";
			echo "</td><td>".$row["mon"];
			echo "</td><td>".$row["tues"];
			echo "</td><td>".$row["wed"];
			echo "</td><td>".$row["thur"];
			echo "</td><td>".$row["fri"];
			echo "</td><td>".$row["sat"];
			echo "</tr><td>9:30 - 10:30</td>";
			echo "</td><td>".$row["monn"];
			echo "</td><td>".$row["tuess"];
			echo "</td><td>".$row["wedd"];
			echo "</td><td>".$row["thurr"];
			echo "</td><td>".$row["frii"];
			echo "</td><td>".$row["satt"];
			echo "</td></tr>";	
	}
	}
?>
</form>
</table>
<center><br><br><br><br>
</center>
</form></center>
</body>
</html>