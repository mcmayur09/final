<html>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=email], input[type=date],input[type=tel],input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button.a {
    background-color: #4CAF50;
    color: white;
    padding: 10px 10px;
    margin: 30px 30px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}





button.login, button.aboutus, button.reg {
    background-color: #4CAF50;
    color: white;
    padding: 5px 5px;
    margin: 20px 20px;
    border: none;
    cursor: pointer;
    width: 10%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

.login, .aboutus, .reg {
  cursor: pointer;
  position: absolute;
  top: 5%;
  width: auto;
  padding: 10px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  user-select: none;
}
.login {
  right: 12%;
  
}
.aboutus {
  right: 0;
  
}
.reg {
  right: 24%;
  
}

.logo
{
margin: 5px 5px;
border: none;
position: absolute;
width: auto;
}


* {margin: 0; padding: 0; border: 0 none;}
html, body {height: 100%; width: 100%; font-size: 1rem; font-family: 'Exo', sans-serif; font-weight: 100;}
.cont-slider {
    position: relative;
    height: 100vh;
    max-height: 100vh;
    width: auto;
    min-width: 100vw;
    margin: 0 auto;
    overflow: hidden;
}
.slider {
    animation: sliding 20s ease-out 0s none infinite;
    position: absolute;
    left: 0;
    top: 0;
    width: 500%;
    height: 100%;
}
.slide {
    display: inline-block;
    position: relative;
    width: 20%;
    height: 100%;    
    background-attachment: fixed;
    background-position: center center;
    background-size: cover;
}
.slide span {
    background: rgba(0, 0, 0, 0.3);
    border-radius: 0 5vh 5vh 0;
    color: #FFF;
    position: absolute;
    left: 0;
    top: 40vh;
    font-size: 20vh;
    line-height: 20vh;
    border: 1px solid rgba(255,255,255,.45);
    border-left: 0 none;
}
.one {
  background-image: url("wall5.jpg");}
.two {
  background-image: url("wall1.jpg");}
.three {
  background-image: url("wall2.jpg");}
.four {
  background-image: url("wall3.jpg");}
.five {
  background-image: url("wall4.jpg");}


@keyframes sliding {
  0% {left: 0%; }
  15% {left: 0%; }
  20% {left: -100%; }
  35% {left: -100%; }
  40% {left: -200%; }  
  55% {left: -200%; }
  60% {left: -300%; }
  75% {left: -300%; }
  80% {left: -400%; }
  95% {left: -400%; }   
  100% {left: 0; }
}
.welcome-text{
	position: absolute;
	width: 600px;
	height: 63px;
	margin: 35% 30%;
	text-align: center;
	font-size:22px;
	background-color:#ffe866;
	padding: 5px;
	}
.numbertext
{
	color:#f2f2f2;
	font-size:12px;
	padding:8px 12px;
	position:absolute;
	top:0;
}


</style>

<body bgcolor="black">
<div class="cont-slider">

		<div id="modal-wrapper" class="modal">

		<form class="modal-content animate" name="reg" action="home.php" onsubmit="return validate()" method="POST">
        
			<div class="imgcontainer">
				<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
				<h1 style="text-align:center">Registration Form<h1>
			</div>

		<div class="container">
			<input type="text" placeholder="Name" name="fullname">
			<input type="text" id="txtDate" placeholder="Date of Birth(DD/MM/YYYY)" name="dat" required>
			<span class="error" id="lblError"></span>   
			<input type="email" placeholder="E-mail" name="emailid"> 
			<input type="text" placeholder="Mobile number" name="mobileno">
			&nbsp &nbsp &nbsp Gender:
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Other
			<input type="password" placeholder="Password" name="pwd">
			<input type="password" placeholder="Re-Enter Password" name="pwd1">
			<button class="a" type="submit">Register</button>
        
		</form>
	</div>
	
	</div>
    <div class="slider">
		 
      <div class="slide one"></div><!--
	  --><div class="slide two"></div><!--
      --><div class="slide three"></div><!--
      --><div class="slide four"></div><!--
      --><div class="slide five"></div>
	 
	  </div>
	  <div class="logo"><br>&nbsp &nbsp<img src="bsc.jpg" height="200" width="250"></div>
	  <button class="login" onclick="window.location.href='Login.php'" >Login</button>		
		<button class="reg" onclick="document.getElementById('modal-wrapper').style.display='block'">Register</button>
		  <button class="aboutus" onclick="window.location.href='aboutus.html'">AboutUs</button>
		  <div class="welcome-text">
		<h1>Book a space that suits you<h1>
</div>
<?php
$con=mysqli_connect("localhost","root","");
$email=$_POST['emailid'];
$name=$_POST['fullname'];
$dob=$_POST['dat'];
$mob=$_POST['mobileno'];
$password=$_POST['pwd'];
$gender=$_POST['gender'];
echo $dob;
mysqli_select_db($con,"eventmanagementsystem");
mysqli_query($con,"INSERT INTO `customer` (`Name`, `DOB`, `Email`, `Mob no.`, `Password`, `Gender`) VALUES ('$name','$dob','$email','$mob','$password','$gender')");
?>
</div>
</body>
<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function validate()
{
name=document.forms["reg"]["fullname"].value;
gen=document.forms["reg"]["gender"].value;
eid=document.forms["reg"]["emailid"].value;
pwd=document.forms["reg"]["pwd"].value;
rpwd=document.forms["reg"]["pwd1"].value;
mob=document.forms["reg"]["mobileno"].value;
fu=0;f=0;fs=0;fd=0;i=0;
l=pwd.length;
if(pwd!=rpwd)
{
 alert("Password mismatch.");
 return false;
 }
else if(name=="")
{
alert("Name should not be empty.");
 return false;
 }
 else if(eid=="")
{
alert("Please enter E-mail");
 return false;
 }
 else if(mob.length!=10)
 {
 alert("Enter valid mobile no");
 return false;
}
else if(l<8||l>16)
{
alert("Password length should be in between 8-16");
return false;
}	
for(i=0;i<l;i++)
{
if(pwd.charAt(i)>='A'&&pwd.charAt(i)<'Z')
fu=1;
else if(pwd.charAt(i)>='a' && pwd.charAt(i)<='z')
f=1;
else if(pwd.charAt(i)>='0' && pwd.charAt(i)<='9')
fd=1;
else
fs=1;
}
        var lblError = document.getElementById("lblError");
 
        //Get the date from the TextBox.
        var dateString = document.getElementById("txtDate").value;
        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
 
        //Check whether valid dd/MM/yyyy Date Format.
        if (regex.test(dateString)) {
            var parts = dateString.split("/");
            var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
            var dtCurrent = new Date();
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
			alert("Eligibility 18 years ONLY.")
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
                //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
				alert("Eligibility 18 years ONLY.")
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                    //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
					alert("Eligibility 18 years ONLY.")
                        return false;
                    }
                }
            }
        } else {
            alert("Enter date in dd/MM/yyyy format ONLY.");
            return false;
        }
if(fu==1&&f==1&&fs==1&&fd==1)
{alert("Registered successfully..");
 return true;}
else
{
 alert("A password should contain a uppercase character,lower case character, a number and a special character");
 return false;
}
}
</script>
</html>
