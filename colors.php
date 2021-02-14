<?php
//session_start();
require 'connection.php';
if (isset($_POST['color'])) 
{
$colorvalue=$_POST['color'];
echo $colorvalue."kk";
$myid=$_SESSION['userid'];
$color="select * from colors where id='$myid'";
$colorresult=mysqli_query($con,$color);
if (mysqli_num_rows($colorresult)==0) 
{	
$inscolor="INSERT INTO colors(id,color) VALUES ('$myid','$colorvalue')";
$insresult=mysqli_query($con,$inscolor);
}
else
{
	$updcolor="update colors set color='$colorvalue' where id='$myid'";
	mysqli_query($con,$updcolor);
}
$selcolor="select color from colors where id='$myid'";
$selresult=mysqli_query($con,$selcolor);
if (mysqli_num_rows($selresult)>0) 
{
while($row=mysqli_fetch_assoc($selresult))
{
$_SESSION['color']=$row['color'];
}	
}
echo "here".$_SESSION['color'];
header("Location:miniletterhome.php");
?>
<script>window.location.replace("miniletterhome.php");</script>
<?php
}
?>