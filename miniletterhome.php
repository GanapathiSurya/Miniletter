<!DOCTYPE html>
<html>
<?php
//session_start();
require 'connection.php';
?>
<head>
<script type="text/javascript" src="titlebar.js"></script>
	<title>Miniletter Home</title>
</head>
<body background="<?php 
if (isset($_SESSION['image']))
{
  echo $_SESSION['image'];
}
?>" style="object-fit:cover;z-index:0;">
<?php
require 'titlebar.php';
?>
<?php
if (!isset($_SESSION['userid'])) 
{
?>
<div class="row">
	<div class="col-sm-12 col-lg-4 col-md-12 pt-2" >
		<?php
        require 'slideview.html';
		?>
	</div>
	<div class="col-sm-12 col-lg-8 col-md-12">
   <?php
        require 'registeredusers.php';
		?>
	</div>
</div>
<?php
}
?>
<?php
if(isset($_SESSION['userid']))
{
?>
<div class="w3-row">
<div id="sidebar" class='w3-quarter w3-padding'>
<?php
require 'sidebar.php';
?>
</div>
<div class="w3-rest w3-white" style="height:700px;">
        <div class="col-sm-12 col-lg-6 pt-1">
        <?php
        require 'slideview.html';
		?>	
        </div>
        <div class="col-sm-12 col-lg-6">
        
        </div>
</div>  
</div>
<?php
}
?>
</body>
</html>