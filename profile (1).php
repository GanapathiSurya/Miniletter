<!DOCTYPE html>
<html>
<?php
require 'connection.php';
?>
<?php
require 'connection.php';
?>
<head>
  <title>MiniLetter Home</title>
 <style type="text/css">
 a:link,a:visited
 {
 	text-decoration: none;
 }
 @media screen and (max-width:240px)
 {
 	#profile
 	{
 		display:block;
 	}
 }
 @media screen and (min-width:300px)
 {
 	#profile
 	{
 	display:none;
	 }
 }
 </style>
 </head>
 <body >
  <?php
   require 'titlebar.php';
  ?>
  <center><br><br>
 <div class="w3-card w3-padding w3-white" style="width:300px;">
<div id="profile">
<a href="holidaymain.php" class="w3-bar-item w3-button">Inbox</a>
  <a href="leaveform.php" class="w3-bar-item w3-button">Compose</a>
  <a href="sentmails.php" class="w3-bar-item w3-button">Sent</a>
  <span class="w3-bar-item w3-button">Theme</span>
  <div class=" w3-border-0 w3-margin w3-padding-small w3-center">
    <form method="post" action="colors.php">
    <button style="background-color:rgb(255,173,51);width:20px;height:20px;border:none;" id='orange' name="color" value="rgb(255,173,51)"></button> 
    <button style="background-color:rgb(0,102,153);width:20px;height:20px;border:none;" id='blue' name="color" value="rgb(0,102,153)"></button>
    <button style="background-color:rgb(0,153,0);width:20px;height:20px;border:none;" id='green' name="color" value="rgb(0,153,0)"></button>
     <button style="background-color:rgb(255,102,179);width:20px;height:20px;border:none;" id='pink' name="color" value="rgb(255,102,179)"></button> 
     <button style="background-color:rgb(0,0,0);width:20px;height:20px;border:none;" id='black' name="color" value="rgb(0,0,0)"></button> 
     <button style="background-color:rgb(255,102,102);width:20px;height:20px;border:none;" id='red' name="color" value="rgb(255,102,102)"></button><br>
     <button style="background-color:rgb(51,153,255);width:20px;height:20px;border:none;" id='skyblue' name="color" value="rgb(51,153,255)"></button>
     <button style="background-color:rgb(179,45,0);width:20px;height:20px;border:none;" id='brown'  name="color" value="rgb(51,153,255)"></button> 
     <button style="background-color:rgb(128,128,128);width:20px;height:20px;border:none;" id='grey' name="color" value="rgb(128,128,128)"></button> 
     <button style="background-color:rgb(153,204,0);width:20px;height:20px;border:none;" id='lightgreen'  name="color" value="rgb(153,204,0)"></button> 
     <button style="background-color:rgb(31,122,122);width:20px;height:20px;border:none;" id='ablue'  name="color" value="rgb(31,122,122)"></button>
     <button style="background-color:rgb(51,204,204);width:20px;height:20px;border:none;" id='purple' name="color" value="rgb(51,204,204)"></button>  
    </form>
    </div>
</div>
  <?php
 echo "<ul class='w3-ul'>";
echo "<li class='w3-rightbar w3-border-light-grey w3-padding'>UserId: ".$_SESSION['userid']."</li>";
echo "<li class='w3-leftbar w3-border-light-grey w3-padding'>Name: ".$_SESSION['username']."</li>";
echo "<li class='w3-rightbar w3-border-light-grey w3-padding'>Phone: ".$_SESSION['phone']."</li>";
echo "<li class='w3-leftbar w3-border-light-grey w3-padding'>Gender: ".$_SESSION['gender']."</li>";
echo "</ul>"
 ?>
 <a href='logout.php'><button id='logout' class='w3-round w3-padding w3-border-0 w3-white w3-text-black w3-margin w3-bar-item w3-hover-light-grey'>Logout</button></a></div>
</center>
 </body>
 </html>