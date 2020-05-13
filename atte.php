<html>
<head>
<title>Home Page</title>
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
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Attendance</h2></center>
		<center><img src="studentdb.jpg" height="200" width="400"><br>
Enter date:<input type="date" name="dd"><br>
Enter student name:<input type="text" name="nm"><br>
<select name="ss">
<option>present</option>
<option>absent</option>
<option>other</other>
</select>
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
$xyz=$_POST['nm'];
$pqr=$_POST['ss'];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error());
    //$table1="CREATE TABLE ae(dt date,name VARCHAR(20),pr VARCHAR(10))";
   //$conn->query($table1)or die(mysqli_error());
    $value="SELECT * FROM student";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
      if($row["name"]==$ne)
        {
      echo "<tr><td>".$row["dt"];
      echo "</td><td>".$row["name"];
      echo "</td><td>".$row["pr"];
      echo "</td><td><input </tr>";
    } 
  }
  }
      $values="INSERT INTO ae(dt,name,pr) VALUES('$abc','$xyz','$pqr')";
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