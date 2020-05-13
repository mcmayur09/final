<html>
<head>
<title>Payment Informtaion</title>
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
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Payment Information</h2></center>
		<center><img src="studentdb.jpg" height="200" width="200">
		<br>
<br>
<! –– <input type="text" name="fn">
		<! –– <input type="submit">
<a href="principaldb.php"><input type="button" value="back"></a>
		</form>
<table border="1">
<tr>
<th>name</th>
<th>address</th>
<th>email</th>
<th>number</th></tr>
<?php
//if($_SERVER["REQUEST_METHOD"]=="POST")
//{
//$ne=$_POST['fn'];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
$cnt=0;
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    $value="SELECT * FROM student";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
        {
			echo "</td><td>".$row["name"];
			echo "</td><td>".$row["address"];
			echo "</td><td>".$row["email"];
			echo "</td><td>".$row["number"];
			echo "</td></tr>";
		}	
	}
	}
else
{    
$message = "any payment of given student not found";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
 //}
?>
</center>
</table>
</div>
</body>
</html>