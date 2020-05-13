<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
#rgwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: #3498db;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
	opacity:0.8;
}
</style>
</head>
<body bgcolor="black">
	<div id="rgwrapper">
	<center><br><br><h2>Exam Form</h2></center>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<div class="inner_container">
				<label><b>Name</b></label>
				<input type="text" placeholder="Enter name" name="username" required>
				<label><b>Class</b></label>
				<input type="text" placeholder="Enter class" name="addr" required>
				<label><b>Select Role</b></label><br><br>
				<select name="sl"><option value="student">Regular</option><option value="teacher">Regular+Backlog</option></select>
				<br><br><label><b>Exam Fee Payment ID</b></label>
				<input type="password" placeholder="Enter Payment ID" name="password" required>
				<button name="register" class="sign_up_btn" type="submit">Apply</button>
				<a href="studentdb.php"><button type="button" class="back_btn"><< Back</button></a>
			</div>
		</form>
	</div>
		
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if($_POST['password']=='1234')
	{
		$message = "you have applied for exam";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
	$message = "payment id not found";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>
</body>
</html>