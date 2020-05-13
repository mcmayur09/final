<html>
<head>
<title>Forget Password</title>
<link rel="stylesheet" href="style.css">
<style>
#fpwrapper
{
	height: 950px;
	border-radius : 10px;
	background-color: #ffff99;<!--#3742fa;-->
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
#mc
{
	background-color:#ff3385;
	color:white;
}
#bt
{
background-color:#80dfff;
color:white;
}
</style>
</head>
<body bgcolor="#80ffcc" text="#2ecc71">
<div id="fpwrapper">
<center><br><br><br><br><img src="fp.jpg" height="300" width="300"><br>
</style>
</head>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<a href="login.php"><input id="bt" type="button" value="back"></a><br><br>
<br>Enter mail:<br><br><input type="text" placeholder="enter your registered mail" name="mailpass" required><br>Enter OTP sent to your email:<br><br><input type="int" placeholder="enter your otp" name="otpv" required>
<br>Enter new password:<br><br><input type="text" placeholder="enter your registered mail" name="p1" required>
<br>Enter confirm password:<br><br><input type="text" placeholder="enter your registered mail" name="p2" required>
		<br><br><br><br><input id="bt" type="submit">
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
    mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
   if($xyz==$pqr && $abc==1234)
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
        $passerr="check OTP or password not matching";
        echo "<script type='text/javascript'>alert('$passerr');</script>";
	}
  }
?>
	