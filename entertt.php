<html>
<head>
<title>enter timetable</title>
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
select
{
    width: 80px;
	margin: 0 auto;
    padding: 10px;
    border: 1px solid #ccc;
}
</style>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div class="nav" id="hpwrapper">
<br>
		<center><h2 style="color:#78e08f;align:center;">enter timetable</h2></center>
		<center><img src="studentdb.jpg" height="200" width="400"><br>
<table border="1">
<tr>
<th>monday</th>
<th>tuesday</th>
<th>wednesday</th>
<th>thursday</th>
<th>friday</th>
<th>saturday</th>
</tr>
<tr>
<th><select name="mon1">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="tue1">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="wed1">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="thu1">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="fri1">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="sat1">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
</tr>
<tr>
<th><select name="mon2">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="tue2">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="wed2"><option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="thu2">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="fri2">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
<th><select name="sat2">
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="tcs">TCS</option>
<option value="miniproject">MINI PROJECT</option>
<option value="practical">PRACTICAL</option></select></th>
</tr>
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
$a=$_POST['mon1'];
$b=$_POST['tue1'];
$c=$_POST['wed1'];
$d=$_POST['thu1'];
$e=$_POST['fri1'];
$f=$_POST['sat1'];
$g=$_POST['mon2'];
$h=$_POST['tue2'];
$i=$_POST['wed2'];
$j=$_POST['thu2'];
$k=$_POST['fri2'];
$l=$_POST['sat2'];
 $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password,$dbname);//or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    //mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
    $table1="CREATE TABLE tt(m1 varchar(20),m2 varchar(20),m3 varchar(20),m4 varchar(20),m5 varchar(20),m6 varchar(20),t1 varchar(20),t2 varchar(20),t3 varchar(20),t4 varchar(20),t5 varchar(20),t6 varchar(20))";
   $conn->query($table1);
      $v="INSERT INTO tt(m1,m2,m3,m4,m5,m6,t1,t2,t3,t4,t5,t6) VALUES('$a','$b','$c','$d','$e','$f','$g',$h','$i','$j','$k','$l')";
      //$values="INSERT INTO student(name,address,password) VALUES('$name','$address','$pass')";
	  try{
		if($conn->query($v)===TRUE)
              {
                $message = "Entered Successfully!";
                echo "<script type='text/javascript'>alert('$message');</script>";
              }  
		else 
		{
			throw new Exception("could not enter");
		}
	  }
	  catch(Exception $e)
	  {
		  echo"$e".message();
	  }
     /*else 
      {
        $passerr="could not enter";
        echo "<script type='text/javascript'>alert('$passerr');</script>";
	}*/
  }
?>