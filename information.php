<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
#ip{
	height: 800px;
	border-radius : 10px;
	background-color:#80dfff;
	border: 3px solid #f1f1f1;
	width: 700px;
	margin: 0 auto;
}
</style>
</head>
<body style="background-color:#80ffd4">
	<div id="ip">
	
			<div class="imgcontainer">
			<h2>SCHOOL MANAGEMENT SYSTEM</H2><BR><img src="infoimg1.jpg" height="300" width="300"><BR><BR><BR>
			<b>Our project is about school management system <br><br>Image result for information of school management system
School Management System is a is a complete school management software designed to automate a school's diverse operations from classes, exams to school events calendar.<br><br>
This school software has a powerful online community to bring parents, teachers and students on a common interactive platform.<br><br>A school management software is the best online tool to manage your school database. <br><br>
Every school use school software to control the student details and every department worksheet.<br><br> To begin with, proper management of time along with an effective and an error-free atmosphere, school management software 
leaves all the traditional techniques far behind. This is the best way to manage your homework system, holidays, fee and time table for each and every student of class.<br><br>
 Teachers can also submit online report of homework completion and this will be notified to parents through notification.
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