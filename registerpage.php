<!DOCTYPE html>
<html>
<?php
require 'connection.php';
?>
<head>
	<title>Miniletter Registerpage</title>
</head>
<body>
<center>
<br><br>
<form action="register.php" enctype="multipart/form-data"  method="post" class="w3-white w3-margin w3-border" style="width:300px;" >
<!--<h2 class="w3-center">Fill Up The Form</h2>-->
<div class="w3-center w3-xxlarge w3-padding">
Mini&#128231;letter
</div>Already User?
<a href="loginpage.php">Login</a>
<?php
        if (@$_GET['Empty']==true) 
        {
        ?>
        <div class="w3-text w3-light-grey w3-medium w3-text-black">
        *<?php echo $_GET['Empty'];?>
        </div>  
        <?php
        }
        ?>  
<?php
        if (@$_GET['incpwd']==true) 
        {
        ?>
        <div class="w3-text w3-light-grey w3-medium w3-text-black ">
        *<?php echo $_GET['incpwd'];?>
        </div>  
        <?php
        }
        ?> 


<?php
        if (@$_GET['invpassword']==true) 
        {
        ?>
        <div class="w3-text-black w3-light-grey w3-medium w3-text-white ">
        *<?php echo $_GET['invpassword'];?>
        </div>  
        <?php
        }
        ?>   
<?php
        if (@$_GET['incnum']==true) 
        {
        ?>
        <div class="w3-text w3-light-grey w3-medium w3-text-black ">
        *<?php echo $_GET['incnum'];?>
        </div>  
        <?php
        }
        ?>   
<?php
        if (@$_GET['exist']==true) 
        {
        ?>
        <div class="w3-text w3-light-grey w3-medium w3-text-black ">*<?php echo $_GET['exist'];?></div>  
        <?php
        }
        ?>    
<?php
        if (@$_GET['uidformat']==true) 
        {
        ?>
        <div class="w3-text w3-light-grey w3-medium w3-text-black ">*<?php echo $_GET['uidformat'];?></div>  
        <?php
        }
        ?>   

<div class="w3-row w3-section w3-margin">
  
    <div class="w3-rest">
      <input class="w3-input w3-border-0 w3-light-grey w3-round" name="name" type="text" placeholder="User Name" value="<?php echo isset($_SESSION["entername"]) ? $_SESSION["entername"] : ''; ?>">
    </div>
</div>

<div class="w3-row w3-section w3-margin">
  
    <div class="w3-rest">
      <input class="w3-input w3-border-0 w3-light-grey w3-round" name="uid" type="text" placeholder="User Id" id="userid" value="<?php echo isset($_SESSION["enteruid"]) ? $_SESSION["enteruid"] : ''; ?>">
      eg:ml@yourwish<br><span class="w3-text-red">Note:</span>Don't include any comma ","
    </div>
</div>

<div class="w3-row w3-section w3-margin">
    <div class="w3-rest">
      <input class="w3-input w3-border-0 w3-light-grey w3-round" name="email" type="email" placeholder="Email" value="<?php echo isset($_SESSION["enteremail"]) ? $_SESSION["enteremail"] : ''; ?>">
    </div>
</div>

<div class="w3-row w3-section w3-margin">
    <div class="w3-rest">
      <input class="w3-input w3-border-0 w3-light-grey w3-round" name="phone" type="number" placeholder="Phone" value="<?php echo isset($_SESSION["enterphone"]) ? $_SESSION["enterphone"] : ''; ?>">
    </div>
</div>

<div class="w3-row w3-section w3-margin">
    <div class="w3-rest">
        <input class="w3-input w3-border-0 w3-light-grey w3-round" type="password" name="password" placeholder="Password">
    </div>
</div>

<div class="w3-row w3-section w3-margin">
  <div class="w3-rest">
    <input class="w3-input w3-border-0 w3-light-grey w3-round" type="password" name="confirmpassword" placeholder="Confirm Password">
  </div>
</div>



<div class="w3-row w3-section w3-padding w3-margin">
    <div class="w3-rest">
    <label>Gender</label>
        <input type="radio" class="w3-radio" name="gender" value="male">
        <label>Male</label>
        <input type="radio" class="w3-radio" name="gender" value="female">
        <label>Female</label>
  </div>
</div>

<input type="submit" class="w3-button w3-text-white w3-block w3-round w3-section  w3-ripple w3-padding "  name="register_submit" style="background-color:rgb(77,166,255);">
</form>
 

</center>
</body>
</html>