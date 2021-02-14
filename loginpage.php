<!DOCTYPE html>
<html>
<?php
require 'connection.php';
?>
<head>
	<title>login page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="w3.css">
</head>
<style type="text/css">
input
{
  background-color:#f3f3f3;
}
</style>
<body>
  <center>
<form action="login.php" method="post" class="w3-margin w3-white  w3-border" style="width:300px;">
<div class="w3-center w3-xxlarge  w3-padding">
Mini&#128231;letter
</div>New User?
<a href="registerpage.php">Register</a>
        <?php
        if (@$_GET['Empty']==true) 
        {
        ?>
        <div class="w3-text w3-light-grey w3-medium">*<?php echo $_GET['Empty'];?></div>  
        <?php
        }
         ?> 
          <?php
        if (@$_GET['Invalid']==true) 
        {
        ?>
        <div class="w3-text w3-light-grey w3-medium">*<?php echo $_GET['Invalid'];?></div>  
        <?php
        }
         ?> 

<div class="w3-row w3-section w3-margin">
    <div class="w3-rest">
      <input class="w3-input w3-border-0 w3-round" name="uid" type="text" placeholder="User Id">
    </div>
</div>


<div class="w3-row w3-section w3-margin">
  <div class="w3-rest">
    <input class="w3-input w3-border-0 w3-round" type="password" name="password" placeholder="Password">
   </div>
</div>

<input type="submit" value="Login" class="w3-button w3-text-white w3-block w3-round w3-section  w3-ripple w3-padding " name="login" style="background-color:rgb(77,166,255);">

</form>
</center>

</body>
</html>