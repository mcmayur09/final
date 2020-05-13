<html>
<head>
<title>Time Table</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
body
{
	background-image: url('bg.jpg');
	background-repeat: no-repeat;
	background-size: 100%,100%;
}
#hpwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}

.navlist:hover{
            background-color:#78e08f;
            color:white;
}
.logout_button{
	background-color: #78e08f;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 100%;
	font-size:18px;
	font-weight: bold;
	border: 0px solid #f1f1f1;
}
</style>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div class="nav" id="hpwrapper">
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Time</h2></center>
		<center><img src="studentdb.jpg" height="200" width="200">
		<br>
<br>
		<input type="submit" value="Show Timetable">
<a href="studentdb.php"><input type="button" value="back"></a>
		</form>
<table border="1">
<tr>
<th>monday</th>
<th>tuesday</th>
<th>wednesday</th>
<th>thursday</th>
<th>friday</th>
<th>saturday</th>
</tr>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
$cnt=0;
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    $value="SELECT * FROM tt";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
        {
			echo "<tr><td>".$row["mon1"];
			echo "</td><td>".$row["tue1"];
			echo "</td><td>".$row["wed1"];
			echo "<tr><td>".$row["thu1"];
			echo "</td><td>".$row["fri1"];
			echo "</td><td>".$row["sat1"];
			echo "</td></tr>";
			echo "<tr><td>".$row["mon2"];
			echo "</td><td>".$row["tue2"];
			echo "</td><td>".$row["wed2"];
			echo "<tr><td>".$row["thu2"];
			echo "</td><td>".$row["fri2"];
			echo "</td><td>".$row["sat2"];
			echo "</td></tr>";
		}	
	}
	}
else
{    
$message = "No Timetable Not Found";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
 }
?>
</center>
</table>
</div>
</body>
</html>