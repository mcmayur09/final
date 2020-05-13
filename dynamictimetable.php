<html>
<head>
<title>dynamic Time Table</title>
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
	background-color: #f3f3f3;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 600px;
	margin: 0 auto;
}

input{
    width: 80px;
	margin: 10 auto;
    padding: 10px;
    border: 1px solid #ccc;
	text-align:center;
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
<body style="height: 100%;width: 100%;">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div class="nav" id="hpwrapper">
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Enter Timetable</h2></center>
		<center><img src="studentdb.jpg" height="200" width="200">
		<br>
<br>
<a href="teacherdb.php"><input type="button" style="color:pink; background:orange;" value="back"></a><br>
<table border="1" style="width: 100%;">
<tr>
  <th>time</th>
<th>monday</th>
<th>tuesday</th>
<th>wednesday</th>
<th>thursday</th>
<th>friday</th>
<th>saturday</th>
</tr>
<tr>
  <th>8:30 <br> 9:30</th>
<td><input type="text" name="mon1" value="java"></td>
<th><input type="text" name="tue1" value="php"></th>
<th><input type="text" name="wed1" value="mini project"></th>
<th><input type="text" name="thu1" value="python"></th>
<th><input type="text" name="fri1" value="java"></th>
<th><input type="text" name="sat1" value="php"></th>
</tr>
<tr>
  <th>9:30<br>11:30</th>
<th><input type="text" name="mon2" value="mini project"></th>
<th><input type="text" name="tue2" value="python"></th>
<th><input type="text" name="wed2" value="java"></th>
<th><input type="text" name="thu2" value="php"></th>
<th><input type="text" name="fri2" value="mini project"></th>
<th><input type="text" name="sat2" value="python"></th>
</tr>
</table><br>
<input type="submit"></center>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
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
    $conn=new mysqli($servername, $username, $password,$dbname);
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    //mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
    //mysqli_query($conn,"create table tttt(m1 varchar(20),t1 varchar(20),w1 varchar(20),th1 varchar(20),fr1 varchar(20),sa1 varchar(20),m2 varchar(20),t2 varchar(20),w2 varchar(20),th2 varchar(20),fr2 varchar(20),sa2 varchar(20),m3 varchar(20),t3 varchar(20),w3 varchar(20),th3 varchar(20),fr3 varchar(20),sa3 varchar(20)") or die(mysqli_error($conn));
    	//mysqli_query($conn,"insert into tttt(m1,t1,w1,th1,fr1,sa1,m2,t2,w2,th2,fr2,sa2,m3,t3,th3,fr3,sa3) values($a,$b,$c,$d,$e,$f,$g,$i,$j,$k,$n,$o,$p,$q,$r,$s,$t,$u)") or die(mysqli_error($conn));
    $sql="INSERT INTO timetable(mon,tues,wed,thur,fri,sat,monn,tuess,wedd,thurr,frii,satt) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
    if($conn->query($sql)===TRUE)
    {
    	echo "<script>alert('values inserted')</script>";
    }
    
	}
?>
</center>
</table>
</div>
</body>
</html>