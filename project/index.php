<!DOCTYPE html>
<?php
session_start();
$db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"ACSMS");
     if(isset($_SESSION['user'])){	 
      $uname = $_SESSION['user'];
	  $result=mysqli_query($db,"select name from customer where email='$uname'");
	  while($row=mysqli_fetch_array($result))
	 $res=$row[0];}
 else
	 header("location:/./ACSMS/homepage.html");
 if(isset($_SESSION['book'])){
	 echo "<script>alert('Payment done successfully');</script>";
	 unset($_SESSION['book']);}
	  ?>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>User Portal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
 
  <body>
  <br>
 <div class="check">
    <input type="checkbox" id="check" checked>
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Welcome<br> <?php echo $res;?></header>
  <ul>
    <li><a href="/./ACSMS/customer/index.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
    <li><a href="/./acsms/mycars.php"><i class="fas fa-link"></i>My Cars</a></li>
	<li><a href="\.\ACSMS\pics\search.php"><i class="fas fa-link"></i>Show Cars</a></li>
    <li><a href="\.\ACSMS\edit.php"><i class="fas fa-stream"></i>View Pofile</a></li>
    <li><a href="\.\ACSMS\logout.php"><i class="far fa-question-circle"></i>Log Out</a></li>

  </ul>
</div>
</div>
<div class="body1">
<h1><center>The Future Is Coming...</center></h1>
<h2><center>Get Ready For All-Electric Vehicles</center></h2>
 <div class="sketchfab-embed-wrapper">
    <iframe title="A 3D model" width="1540" height="750" src="https://sketchfab.com/models/456e6e1087364e75a2c2ced221e2f6cb/embed?autospin=0.2&amp;autostart=1&amp;preload=1" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

<p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
    <a href="https://sketchfab.com/3d-models/2015-bmw-i8-456e6e1087364e75a2c2ced221e2f6cb?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;"></a>
   <a href="https://sketchfab.com/ztrztr?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;"></a>
    <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;"></a>
</p>
</div>
</div>
  </body>
</html>
