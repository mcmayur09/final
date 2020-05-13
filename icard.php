<html>
<head>
<title>Icard</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
#hpwrapper{
	height: 850px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 800px;
	margin: 0 auto;
	opacity:0.8;
}
font
{
	font-size: 50px;
}
table
{

	transform: translate(-120px,100px);

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
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;icard</h2></center>
		<center>
		<br>
<br>
<a href="studentdb.php"><input type="button" value="back"></a>
<input type="button" value="print">
<br>

<img style="transform:translate(-50px,50px);border:2px solid black;" src="logo.jpg" height="200" width="200">
<font style="transform: translate(-50px,-50px);">School Student</font>
<img style="transform:translate(20px,320px);border:2px solid black;" src="icard.png" height="200" width="200">
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
    $value="SELECT * FROM student WHERE name='$sessname'";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {
    while ($row = $result->fetch_assoc())
    {
			echo "<tr><td><font>NAME:".strtoupper($row["name"]);
			echo "<tr><td><font>EMAIL:".strtoupper($row["email"]);
			echo "<tr><td><font>NUMBER:".strtoupper($row["number"]);
			echo "<tr><td><font>ADDRESS:".strtoupper($row["address"]);
			echo "</td></tr></font>";
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