<?php
require 'connection.php';
if (isset($_POST['login'])) 
{
	$password=$_POST['password'];
	//echo "here".$password."here";
	if(empty($_POST['uid'])||empty($_POST['password'])) 
	{
	?>
	<script>window.location.replace("loginpage.php?Empty=please fill all the blanks");</script>
	<?php
	}
	elseif((!empty($_POST['uid'])) && (!empty($_POST['password']))) 
	  {
	  $query="select * from registration where userid='".$_POST['uid']."' and password=md5('$password')";
	  $result=mysqli_query($con,$query);
	  if ($row=mysqli_fetch_assoc($result))
	  {
	  	session_start();
	  	$_SESSION['userid']=$_POST['uid'];
	  	$_SESSION['username']=$row['username'];
	  	$_SESSION['phone']=$row['phone'];
	  	$_SESSION['gender']=$row['gender'];
	  	$_SESSION['email']=$row['email'];
	  	$_SESSION['userpwd']=$_POST['password'];
	  ?>
	<script>window.location.replace("miniletterhome.php");</script>
	<?php
	  }
	  else
	  {
	  ?>
	<script>window.location.replace("loginpage.php?Invalid=Invalid login details");</script>
	<?php
	  }
	}
}
?>