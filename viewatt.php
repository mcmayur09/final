0<html>
<head>
<title>attendance Page</title>
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
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Attendance</h2></center>
		<center>
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
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());//create table dynatt(dt date,tm varchar(20),sb varchar(20),sname varchar(20),preabs varchar(20))
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    session_start();
    $sessname=$_SESSION['named'];
    $value="SELECT * FROM dynatt WHERE sname='$sessname'";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {
  	echo "<tr><td>date</td><td>time</td><td>subject</td><td>name</td><td>appearance</td></tr>";
    $perc=0;
    $i=0;
    while ($row = $result->fetch_assoc())
    {
        {
			echo "<tr><td>".$row["dt"];
			echo "</td><td>".$row["tm"];
			echo "</td><td>".$row["sb"];
			echo "</td><td>".$row["sname"];
			echo "</td><td>".$row["preabs"];
			echo "</td></tr>";
			$i++;
			if($row["preabs"]=="present")
			{
				$perc++;
			}
		}	
	}
	$percent=(($perc/$i)*100);
	echo "<tr><td colspan='5'>attendance:$percent%</td></tr>";
	if(($perc/$i) >= 0.75)
	{
			?>
			<tr><td colspan="5">defaulter:you are not in defaulter list</td></tr>
			<?php
	}
	if(($perc/$i) < 0.75)
	{
		?>
		<tr><td colspan="5">defaulter:you are in defaulter list</td></tr>
		<?php
	}
}
else
{    
$message="attendance of given student not found";
echo "<script type='text/javascript'>alert('$message');</script>";
  }
?>
</center>
</table>
</div>
</body>
</html>