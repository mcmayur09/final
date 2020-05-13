<html>
<head>
	<style>
		td
		{
			width:200;
			height:50;
			text-align:center;
			font-size:30;
		}
	</style>
	<script>
		function ff()
		{
			alert("attendance locked");
		}
	function te()
	{
		var c=$_COOKIE["da"];
		alert(c);
	}
</script>
</head><?php
echo "<body bgcolor='#f5f6fa'>";
function abcd()
{
	echo "mayur";
}
	function insertdata($snames,$pres)
	{
		$inserting_data="INSERT INTO dynatt(dt,sname,preabs) VALUES('$date_data','$snames','$pres')";
		if($conn->query($inserting_data)===TRUE)//create new php action file and store data//
		{
			echo "success";
		}
	}
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
   //echo $_COOKIE["dt"];
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
   // mysqli->query($conn,$sql);//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
    $value="SELECT * FROM student";
   //<form><button onclick='te()'>ok</button></form><?php
  $result=$conn->query($value);
  $ct=1;
  echo "<center>";
  echo "<table border='1'>";
  if($result->num_rows > 0)
  {
  	$present_data="present";
  	$absent_data="absent";
    while ($row = $result->fetch_assoc())
    {
        {

        	$stud_name=$row['name'];
			echo "</tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;$ct ) </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$stud_name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "</td><td><button onclick='insertdata($stud_name,$present_data)'><font color='green'>present</font></button>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><button onclick='insertdata($stud_name,$absent_data)'><font color='red'>absent</font></button>";
			echo "</td></tr>";
			$ct++;
		}	

	}
	echo "<input type='button' value='lock' onclick='ff()'><br><br>";
	echo "<a href='teacherdb.php'>back</a>";
	//mysqli_query($conn,"create table dynatt(dt date,sname varchar(20),preabs varchar(20))");
}
?>