<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
#ip{
	height: 700px;
	border-radius : 10px;
	background-color: white;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
</style>
</head>
<body style="background-color:#c299ff">
	<div id="ip">
	
			<div class="imgcontainer">
			<h2>SCHOOL MANAGEMENT SYSTEM</h2>
			<img src="feature.jpg" hieght="450" width="450"><br><b>
1) Support Effective Instruction<BR>
2) Careful use for infinite users.<BR>
3) Effective instructional notice boards.<BR>
4) study instructional materials.<BR>
5) Reading opportunities.<BR>
6) A variety of assessment tools.<BR>
7) A positive campus climate.<BR>
8) Professional development.<BR>
9) simple administrative practices.<BR></b>
			</div>
				</div>
		
		<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from userinfotbl where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>
