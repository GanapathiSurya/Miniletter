<!DOCTYPE html>
<html>
<?php
//session_start();
require 'connection.php';
?>
<head>
	<title>Leaveform</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
	$("input").css("padding","20px");
});

</script>
<style type="text/css">
input::placeholder
{
	color: #8c8c8c;
}
</style>
</head>
<body class="w3-white">
<?php
require 'titlebar.php';
?>
<center>
<form class="w3-margin w3-border w3-padding" action="leave.php" method="post" style="width:300px;">
<h3>PERMISSION FORM</h3>
<!--<div class="w3-center  w3-padding">
<font class='w3-xlarge'>Mini<i class="w3-text-white fa fa-envelope"></i>letter</font>
</div>--> 

<?php
        if (@$_GET['Empty']==true) 
        {
        ?>
        <div class="w3-text-black w3-light-grey w3-medium w3-text-white ">
        *<?php echo $_GET['Empty'];?>
        </div>  
        <?php
        }
        ?> 
<?php
        if (@$_GET['format']==true) 
        {
        ?>
        <div class="w3-text-black w3-light-grey w3-medium w3-text-white ">
        *<?php echo $_GET['format'];?>
        </div>  
        <?php
        }
        ?>  
<?php
        if (@$_GET['notexist']==true) 
        {
        ?>
        <div class="w3-text-black w3-light-grey w3-medium w3-text-white ">
        *<?php echo $_GET['notexist'];?>
        </div>  
        <?php
        }
        ?>  
<input type="text" name="towhom" class="w3-input w3-white" placeholder="Receiver Id">
<input type="date" name="from" class="w3-input w3-white" placeholder="From">
<input type="date" name="to" class="w3-input w3-white" placeholder="To">
<!--<textarea rows="5" cols="30"  name="reason" class="w3-input w3-light-grey" placeholder="Mention Your Reason"></textarea>-->
<textarea rows="5" cols="30" name="reason" class="w3-input w3-white" placeholder="Reason"></textarea>
<textarea rows="5" cols="30" name="contact" class="w3-input w3-white" placeholder="More contact details"></textarea><br>
<button type="submit" name="leave_form_submit" class="w3-button w3-padding w3-block w3-light-grey w3-round">Confirm</button>
</form>
</center>
</body>
</html>