<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="titlebar.css">
</head>
<body>
<?php
if(isset($_SESSION['userid']))
{
?>
<a href='leaveform.php'><button  id='fl' class='w3-padding-small flagcompose w3-border-0 w3-text-white  w3-margin' style="position:fixed;z-index: 1;"><font size='4'>&#10010;</font></button></a>
<?php
}
?>
<div class=" w3-bar" style="height:60px;" id='head'>
    <div class="w3-bar-item w3-text-white"><font size="5" style="font-family:aerial">Mini<a href="miniletterhome.php"><img src="maillogo.png" width="30" height="20"></a></span>letter</font>
    </div>
<?php
if (!isset($_SESSION['userid'])) 
{
?>
<div class="w3-bar-item" id='nmsignup'><a href='registerpage.php'><button class="w3-button w3-padding-small w3-text-black w3-white  w3-round">Signup</button></a></div>
<div class="w3-bar-item" id='nmlogin'><a href='loginpage.php'><button class="w3-button w3-padding-small w3-text-black w3-white w3-round">Login</button></a></div>
<div class="w3-bar-item" id='msignup'><a href='registerpage.php'><button class='w3-padding-small w3-border-0 w3-white  '><i class="glyphicon glyphicon-user"></i></button></a></div>
<div class="w3-bar-item" id='mlogin'><a href='loginpage.php'><button class='w3-padding-small w3-border-0 w3-white  '><i class="glyphicon glyphicon-log-in"></i></button></a></div>
<?php
}
else
{
$fl=$_SESSION['username'];
$firstletter=strtoupper($fl[0]);
echo "<a href='profile.php'><button  class='w3-round-xxlarge w3-padding-small w3-border-0 w3-white w3-text-blue-grey w3-margin w3-bar-item'>".$firstletter."</button></a>";
echo "<span class='w3-large w3-text-white w3-margin-top w3-padding-small w3-bar-item' id='displayname'>".$_SESSION['userid']."</span>";
echo "<a href='leaveform.php'><button  class='w3-round-xxlarge w3-padding-small w3-border-0 w3-white w3-text-blue-grey w3-margin w3-bar-item' id='ncompose'>+ Compose</button></a>";
echo "<span class=' w3-xlarge w3-border-0 w3-text-white w3-margin' id='mlogin' onclick='w3_open()' style='outline:none'><i class='glyphicon glyphicon-menu-hamburger'></i></span>
";
}
?>
</div>
<div class="w3-sidebar w3-bar-block w3-white w3-border-right" style="display:none" id="mineSidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
<a href="miniletterhome.php" class="w3-bar-item w3-button">Home</a>
  <a href="minilettermails.php" class="w3-bar-item w3-button">Inbox</a>
  <a href="leaveform.php" class="w3-bar-item w3-button" >Compose</a>
  <a href="minilettersentmails.php" class="w3-bar-item w3-button">Sent</a>
  <span class="w3-bar-item w3-button">Theme</span>
  <div class=" w3-border-0 w3-margin w3-padding-small w3-center">
    <form method="post" action="colors.php">
    <button style="background-color:rgb(255,173,51);width:20px;height:20px;border:none;" id='orange' name="color" value="rgb(255,173,51)"></button> 
    <button style="background-color:rgb(0,102,153);width:20px;height:20px;border:none;" id='blue' name="color" value="rgb(0,102,153)"></button>
    <button style="background-color:rgb(0,153,0);width:20px;height:20px;border:none;" id='green' name="color" value="rgb(0,153,0)"></button>
     <button style="background-color:rgb(255,102,179);width:20px;height:20px;border:none;" id='pink' name="color" value="rgb(255,102,179)"></button> 
     <button style="background-color:rgb(0,0,0);width:20px;height:20px;border:none;" id='black' name="color" value="rgb(0,0,0)"></button> 
     <button style="background-color:rgb(250,44,7);width:20px;height:20px;border:none;" id='red' name="color" value="rgb(250,44,7)"></button><br>
     <button style="background-color:rgb(51,153,255);width:20px;height:20px;border:none;" id='skyblue' name="color" value="rgb(51,153,255)"></button>
     <button style="background-color:rgb(179,45,0);width:20px;height:20px;border:none;" id='brown'  name="color" value="rgb(179,45,0)"></button> 
     <button style="background-color:rgb(128,128,128);width:20px;height:20px;border:none;" id='grey' name="color" value="rgb(128,128,128)"></button> 
     <button style="background-color:rgb(153,204,0);width:20px;height:20px;border:none;" id='lightgreen'  name="color" value="rgb(153,204,0)"></button> 
     <button style="background-color:rgb(31,122,122);width:20px;height:20px;border:none;" id='ablue'  name="color" value="rgb(31,122,122)"></button>
     <button style="background-color:rgb(51,204,204);width:20px;height:20px;border:none;" id='purple' name="color" value="rgb(51,204,204)"></button>  
     <button class="w3-white w3-border-0" name="color" value="orange"><img src="flag.jpg" class="" style="width:40px;height:40px;" ></button>
    </form>
    </div>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>
<script type="text/javascript">
$(document).ready(function()
  {
  val='<?php echo $_SESSION['color'];?>';
  //alert(val);
  $("#head").css("background-color",val);
   $("#fl").css("background-color",val);
   if (val=='orange') {

  $(".flagcompose").css("background-color","#0059b3");
   }
  });

function w3_open() {
  document.getElementById("mineSidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mineSidebar").style.display = "none";
}
</script>
</body>
</html>