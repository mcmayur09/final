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
	background-blend-mode: luminosity;
}
.navlist{
            text-align: center;
            float: center;
            list-style-type: none;
            width: 20%;
            height: 50px;
            background:rgba(0,0,0,0.8);
            line-height: 50px;
            cursor:  pointer;
            transform:translateY(-250%);
}
</style>
</head>
<body bgcolor="#666666" text="#cccccc">
<br><img src="logo.jpg" height="300" width="300">
		<center><h2 style="font-size:50;color:#2bcbba;transform:translateY(-450%);">&nbsp;&nbsp;&nbsp;&nbsp;School</h2></center>
		
		<form action="index.php" method="post">
		 <li class="navlist"><a href="features.php" style="text-decoration: none; color:white;">Features</li>
            <li class="navlist"><a href="information.php" style="text-decoration: none; color:white;">Information</li>
            <li class="navlist"><a href="contact.php" style="text-decoration: none;color:white;">Contact us</li>
		      <li class="navlist"><a href="login.php" style="text-decoration: none;color:white;">Login</li>
		      	      <li class="navlist"><a href="register.php" style="text-decoration: none;color:white;">Register</li>
		</form>
<center>
<div class="w3-content w3-section" style="max-width:1000px;">
  <img class="mySlides" src="one.jpg" style="width:100%">
  <img class="mySlides" src="two.jpg" style="width:100%">
  <img class="mySlides" src="three.jpg" style="width:100%">
  <img class="mySlides" src="four.jpg" style="width:100%">
  <img class="mySlides" src="five.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>	    
</body>
</html>