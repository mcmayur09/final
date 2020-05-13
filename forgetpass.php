<html>
<head>
<style>
body
{
	background-image: url('bg.jpg');
	background-repeat: no-repeat;
	background-size: 100%,100%;
}
#hpwrapper{
	height: 550px;
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
<body bgcolor="black">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div class="nav" id="hpwrapper">
<br>
		
		<center style="font-size:20px">
<br>Enter mail:<br><br><input type="text" placeholder="enter your registered mail" name="mailpass"><br>Enter OTP sent to your email:<br><br><input type="int" placeholder="enter your opt" name="otpv">
<br>Enter new password:<br><br><input type="text" placeholder="enter your registered mail" name="p1">
<br>Enter confirm password:<br><br><input type="text" placeholder="enter your registered mail" name="p2">
		<br><br><input type="submit">
<a href="login.php"><input type="button" value="back"></a>
		</form>
	</div>
</center>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$ml=$_POST['mailpass'];
$abc=$_POST['otpv'];
$xyz=$_POST['p1'];
$pqr=$_POST['p2'];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
   if($xyz==$pqr)
   {
   //$conn->query($table1)or die(mysqli_error());
      $values="UPDATE student SET password = '$xyz' WHERE email='$ml'";
        if($conn->query($values)===TRUE)
              {
                $message = "changed Successfully!";
                echo "<script type='text/javascript'>alert('$message');</script>";
              } 
   }			  
      else 
      {
        $passerr="check password not matching";
        echo "<script type='text/javascript'>alert('$passerr');</script>";
	}
  }
?>