<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
#hpwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
	opacity:0.8;
}
th
{
	width:100;
	height:50;
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
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Notice Board</h2></center>
		<center><img src="studdb.png" height="200" width="200">
		<br>
<br>
		<input type="submit" value="view notice board">
<a href="studentdb.php"><input type="button" value="back"></a>
		</form>
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
    $value="SELECT * FROM nb";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {
  	echo"<table border='1'>";

    while ($row = $result->fetch_assoc())
    {
			echo "<br><tr><th>".$row["nd"];
			echo "   </th><th>".$row["nden"];
			echo "</th></tr>";
	}
}
else
{    
$message = "no components on notice board";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
 }
?>
</center>
</div>
</body>
</html>