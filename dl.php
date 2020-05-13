<html>
<head>
<title>Defaulter List</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
body
{
	background-color:black;
}
#hpwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}

td
{
	text-align:center;
	width:200;
	height:80;
	font-size:20px;
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
	<div class="nav" id="hpwrapper"><br><br><br><br>
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Defaulter List:Tri-9:TYBSC</h2>
		<br>
<br>
<a href="teacherdb.php"><input type="button" value="back"></a><br><br>
enter criteria<input type="text" name="abcd">
<br><Br><input type="submit"><br><Br>
		</form>
<table border="1">
<tr>
<th>name</th>
<th>Attendance</th>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//$ne=$_POST['fn'];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
   $ab=$_POST['abcd'];
    $conn=new mysqli($servername, $username, $password,$dbname)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    //$conn->query("create table defaulter(name varchar(20),perc float)") or die(mysqli_error($conn));
    $value="SELECT * FROM defaulter where perc<'$ab'";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
			echo "</tr></td><td>".$row["name"];
			echo "</td><td>".$row["perc"];
			echo "</td></tr>";
	}
	}
}
?>
</center>
</table>
</div>
</body>
</html>