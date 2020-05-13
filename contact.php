<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
#cp{
	height: 700px;
	border-radius : 10px;
	background-color: #0652DD;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
</style>
</head>
<body style="background-color:#D980FA" text="white">
	<div id="cp">
	
			<div class="imgcontainer">
			<img src="cp.jpg" height="300" width="400">
			</div>
			<center><h2>1) Mayur Chavan<br>7878765467<br><font size="4">mcmayur09@gmail.com</font><br><br><br>2) Prasad Jatkar<br>7678765456<br><font size="4">prasadjatkar@grr.la</font><br><br><br>3) Bhaskar Chauhan <br><br><br><br>4)Rohan Bilgundi<br>9876534590<br><font size="4">rohanbilgundi333@gmail.com</font></h2> 
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