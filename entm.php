<html>
<head>
<title>Enter Marks</title>
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
	width: 600px;
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
<br>
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Marks</h2></center>
		<center><img src="studentdb.jpg" height="200" width="400"><br>
Enter student name:<input type="text" name="dd"><br>
Enter java marks:<input type="number" name="jv"><br>
Enter php marks:<input type="number" name="ph"><br>
Enter tcs marks:<input type="number" name="ts"><br>
		<input type="submit">
<a href="teacherdb.php"><input type="button" value="back"></a>
		</form>
	</div>
</center>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$abc=$_POST['dd'];
$x=$_POST['jv'];
$y=$_POST['ph'];
$z=$_POST['ts'];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    //$table1="CREATE TABLE percentage(name VARCHAR(20),m1 varchar(10),m2 varchar(10),m3 varchar(10),totl varchar(10),pert VARCHAR(10))";
   //$conn->query($table1)or die(mysqli_error($conn));
   $to=$x+$y+$z;
   $pg=$to/3;
      $values="INSERT INTO percentage(name,m1,m2,m3,totl,pert) VALUES('$abc','$x','$y','$z','$to','$pg')";
        if($conn->query($values)===TRUE)
              {
                $message = "Entered Successfully!";
                echo "<script type='text/javascript'>alert('$message');</script>";
              }     
      else 
      {
        $passerr="could not enter";
        echo "<script type='text/javascript'>alert('$passerr');</script>";
	}
  }
?>