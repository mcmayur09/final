<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
body{
	background-image: url('log.jpg');
	background-repeat: no-repeat;
	background-size: 100%,100%;
	background-blend-mode: luminosity;
}

#mw{
	height: 750px;
	border-radius : 10px;
	background-color: #cfff;<!--#e74c3c;-->
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
input
{
	width:200;
}
select
{
	width:200;
}
button:hover
{
	opacity:0.8;
	color:red;
}
a
{
	font-size:18;
	color:#2fd072;
}
a:hover
{
	opacity:0.8;
}
.login_button {
    background-color: #2ecc71;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 80%;
	font-size:18px;
	font-weight: bold;
}
.register_btn{
	background-color: #2ecc71;
    color: white;
	margin-top:10px;
	margin-bottom:15px;
	padding:10px;
    width: 80%;
	font-size:16px;
	font-weight: bold;
	
}
</style>
</head>
<body bgcolor="#666666">
			
			<center><img src="login.jpg" height="300" width="400">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		
			<div class="inner_container">
				<label><b>Select</b></label><br>
				<select name="rr"><option value="student">Student</option><option value="teacher">Teacher</option>
				<option value="staff">Staff</option><option value="principal">Principal</option></select><br>
				<label><b>Username</b></label><br>
				<input type="text" placeholder="Enter Username" name="username" required><br>
				<label><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register</button></a><br>
				<a href="forget.php">Forget Password</a> &nbsp; &nbsp; &nbsp; &nbsp; 
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="homepage.php">Back</a>
				</center>
			</div>
		</form>
		
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$ss=$_POST['rr'];
  $un=$_POST["username"];
  $pd=$_POST["password"];
  $dbname="sms";
  $server="localhost";
  $user="root";
  $password="";
  $cnt=0;
  $conn=new mysqli($server,$user,$password);
  mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));

  if($ss=="student")
	  $value="SELECT * FROM student WHERE name='$un'";
  else if($ss=="teacher")
	  $value="SELECT * FROM teacher WHERE name='$un'";
  else if($ss=="staff")
	  $value="SELECT * FROM staff WHERE name='$un'";
  else if($ss=="principal")
	  $value="SELECT * FROM principal WHERE name='$un'";
  
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
      if($row["name"]==$un && $pd==$row["password"])
        $cnt=1;
      else
      {
        $cnt=0;
      }
    }
  }
  if($cnt==0)
  {
    $message = "Invalid selection or name or Password!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else if($cnt==1)
  {
	  session_start();
	$_SESSION['loged'] = 1;
	$_SESSION['named'] = "$un";
	if($ss=="student")
		header('Location:studentdb.php');
  else if($ss=="teacher")
    header('Location:teacherdb.php');
  else if($ss=="staff")
    header('Location:staffdb.php');
  else if($ss=="principal")
    header('Location:principaldb.php');
  }
}
?>
	</div>
</body>
</html>