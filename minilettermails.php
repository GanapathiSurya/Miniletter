<!DOCTYPE html>
<html>
<?php
require 'connection.php';
?>
<head>
<script type="text/javascript" src="titlebar.js"></script>
	<title>Miniletter mails</title>
</head>
<body background="<?php 
if (isset($_SESSION['image']))
{
  echo $_SESSION['image'];
}
?>" style="object-fit:cover;">
<?php
require 'titlebar.php';
?>
<?php
if(!empty($_SESSION))
{
?>
<div class="w3-row">
<div id="sidebar" class='w3-quarter w3-padding'>
<?php
require 'sidebar.php';
?>
</div>
<div class="w3-rest w3-white" style="height:700px;overflow-y:auto">
<?php
require 'mails.php';
?>
</div>  
</div>
<?php
}
?>
</body>
</html>