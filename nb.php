<html>
<head>
<title>notice page</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
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
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div class="nav" id="hpwrapper">
<br>
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Notice Board</h2></center>
		<center><img src="studentdb.jpg" height="200" width="400"><br>
Enter date:<input type="date" name="dd"><br>
Enter Notice:<input type="text" name="ta">
		<input type="submit">
<a href="principaldb.php"><input type="button" value="back"></a>
		</form>
	</div>
</center>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$abc=$_POST['dd'];
$xyz=$_POST['ta'];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    //$table1="CREATE TABLE nb(nd date,nden text)";
   //$conn->query($table1)or die(mysqli_error());
      $values="INSERT INTO nb(nd,nden) VALUES('$abc','$xyz')";
        if($conn->query($values)===TRUE)
              {
                $message = "added Successfully!";
                echo "<script type='text/javascript'>alert('$message');</script>";
              }     
      else 
      {
        $passerr="could not enter";
        echo "<script type='text/javascript'>alert('$passerr');</script>";
	}
  }
?>