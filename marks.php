<html>
<head>
<title>Marks</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
#hpwrapper{
	height: 450px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
	opacity:0.8;
}
td
{
	width:100;
	height:50;
	text-align:center;
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
<body bgcolor="black">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div class="nav" id="hpwrapper">
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Marks</h2></center>
		<center><img src="studdb.png" height="200" width="200">
		<br>
<br>
<a href="studentdb.php"><input type="button" value="back"></a>
		</form>
<table border="1">
<?php
//if($_SERVER["REQUEST_METHOD"]=="POST")
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    session_start();
    $sessname=$_SESSION['named'];
    $value="SELECT * FROM percentage WHERE name='$sessname'";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {
  	echo "<tr><td>name</td><td>java</td><td>php</td><td>tcs</td><td>total</td><td>percentage</td></tr>";

    while ($row = $result->fetch_assoc())
    {
			echo "<tr><td>".$row["name"];
			echo "</td><td>".$row["m1"];
			echo "</td><td>".$row["m2"];
			echo "</td><td>".$row["m3"];
			echo "</td><td>".$row["totl"];
			echo "</td><td>".$row["pert"];
			echo "</td></tr>";
	}
}
else
{    
$message = "marks of given student not found";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
 
?>
</center>
</table>
</div>
</body>
</html>