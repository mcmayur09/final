<html>
<head>
<title>change info</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
#hpwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 600px;
	margin: 0 auto;
}
</style>
</head>
<body bgcolor="#666666">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div id="hpwrapper">
<br>
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Marks</h2></center>
		<center><br>
Enter reason for changing information:<br>
        <input type="text" placeholder="Enter reason" name="ml" required><br><br>
Enter admin code:<br>
        <input type="text" placeholder="Enter code" name="username" required><br><br>
<input type="submit">
<br><a href="studentdb.php">back</a><br>
</center>
</div>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name=$_POST["username"];
  $mail=$_POST["ml"];
  if($name == '1234')
  {
    header('Location:change.php');
  }
  else
  {
    echo "<script>alert('check admin code');</script>";
  }
}
?>