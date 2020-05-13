
<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.body
{
	margin:0;
	padding:0;
	background:url(4k.jpg) ;
	background-size:contain;
	background-position:center;
	font-family:sans-serif;
}

.loginbox{
	width: 320px;
	height: 420px;
	background:#000;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing:border-box;
	padding: 70px 30px;
}

.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}	
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align:center;
	font-size: 22px;
}
.loginbox p{
margin: 0;
padding: 0;
font-weight: bold;
}
.loginbox input{
width: 100%;
margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline: none;
height: 40px;
color: #fff;
font-size: 16px;
}
.loginbox input[type="submit"]
{
	border:none;
	outline: none;
	height:40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor:pointer;
	background: #ffc107;
	color:#000;
}
.loginbox a{
text-decoration: none;
font-size:16px;
line-height:20px;
color:darkgrey;

}
.loginbox a:hover
{
color: #ffc107;
}


    * {
      box-sizing: border-box;
	  
      }
      body {
      font-family: Roboto, Helvetica, sans-serif;
      }
      /* Fix the button on the left side of the page */
      .open-btn {
      display: flex;
	  position:fixed;
      justify-content: center;
	  bottom: 22%;
	  right: 50%;
      }
      /* Style and fix the button on the page */
      .open-button {
      background-color: #1c87c9;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      opacity: 1.8;
	    position:relative;
		bottom : -180%;
		right : -50%;
      }
      /* Style submit/login button */
      .form-container .btn {
      background-color: #8ebf42;
      color: #fff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 20%;
      margin-bottom:10px;
      opacity: 0.8;
      }
      /* Hover effects for buttons */
      .form-container .btn:hover, .open-button:hover {
      opacity: 1;
      }
	  td
	  {text-align: left; 
	   padding: 0px;
	  }
	  th{
	  text-align: left;
	  vertical-align: center;
	  }
	  .reset{
	  position : fixed;
	  right : 30%;
	  bottom : 18%;
	  }
	  
</style>
</head>
<?php
	session_start();
	if(isset($_SESSION['not']))
	{
		 echo "<script type='text/javascript'>alert('no user found')</script>";
		 unset($_SESSION['not']);
	}
	if(isset($_POST['eil']))
	{
    $name=$_POST['name'];
     $email=$_POST['eil'];
     $date=$_POST['dat'];
     $mobi=$_POST['mob'];
     $pwd=$_POST['pwd'];
     $gen=$_POST['gen'];
     $add=$_POST['add'];
     $con=mysqli_connect("localhost","root","");
     mysqli_select_db($con,"ACSMS");
     mysqli_query($con,"Insert into customer(name,email,password,mobile,address,dob,gender) values('$name','$email',
	'$pwd','$mobi','$add','$date','$gen')");}
				   ?>

<title>Login</title>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<body background="4k.jpg">
<ul>
  <li><a href="\.\ACSMS\aboutus.html">About Us</a></li>
  <li><a href="\.\ACSMS\contact.html">Contact Us</a></li>
   <li><a href="\.\ACSMS\pics\search.html">Portfolio</a></li>
    <li><a href="\.\ACSMS\homepage.html">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    <div class="dropdown-content">
      <a href="#">Customer</a>
       <a href="\.\ACSMS\login\admlogin.php">Admin</a>
    </div>
  </li>
  
</ul>

	<div class="loginbox">
	<img src="loginp.jpg" class="avatar">
	<h1>Login</h1>
	<form  name="log" action="\.\ACSMS\login\reg.php" method="POST">
	<p>User Name</p>
	<input type="text" name="uname" placeholder="Enter Email Id" required>
	<p>Password</p>
	 <input type="password" name="pass" placeholder="Enter Password" required>
	 <input type="Submit" value="Login">
	 </form>
	<div class="reset"><a href="\.\ACSMS\resetpass.php"><font color="white">Forgot Password ?</font></a></div>
	<div class="open-btn">
      <a href="log.html"><button class="open-button"><strong>Sign Up</strong></button>
    </div>
	</div>
	
  <script type="text/javascript">
      function openForm() {
        document.getElementById("popupForm").style.display="block";
      }
      
      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
	
    </script>
</body>
</html>
