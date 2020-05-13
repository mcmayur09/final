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
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;change info</h2></center>
		<center><br>
Enter your existing mail:<br>
        <input type="text" placeholder="Enter mail" name="ml" required><br><br>
Enter name:<br>
        <input type="text" placeholder="Enter Username" name="username" required><br><br>
Enter address:<br>
        <input type="text" placeholder="Enter address" name="addr" required><br><br>
Enter number:<br><input type="int" pattern="[6-9]{1}[0-9]{9}" placeholder="Enter number" name="nr" required><br>
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
  $address=$_POST["addr"];
  $mail=$_POST["ml"];
  $number=$_POST["nr"];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
   $v=0;
    $conn=new mysqli($servername, $username, $password, $dbname);
    mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
   if(strlen($name)<3)
   {           echo "<script type='text/javascript'>alert('name is short');</script>";
               $v++;
   }
  if(strlen($address)<6)
  { echo "<script type='text/javascript'>alert('address is short');</script>";
    $v++;
  }
  if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) 
  {$v++;
  echo "<script type='text/javascript'>alert('invalid email');</script>";
  }
   if($v==0)
   {
      $values="UPDATE student SET name='$name', address='$address', number='$number' WHERE email='$mail'";
        if($conn->query($values)===TRUE)
              {
                $message = "Updated Successfully!";
                echo "<script type='text/javascript'>alert('$message');</script>";
              }     
    }
}
?>