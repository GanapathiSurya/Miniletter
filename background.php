<?php
//session_start();
require 'connection.php';
if (isset($_POST['wp'])) 
{
$imagevalue=$_POST['wp'];
$myid=$_SESSION['userid'];
$image="select * from bimage where id='$myid'";
$imageresult=mysqli_query($con,$image);
if (mysqli_num_rows($imageresult)==0) 
{	
$insimage="INSERT INTO bimage(id,image) VALUES ('$myid','$imagevalue')";
$insresult=mysqli_query($con,$insimage);
}
else
{
	$updimage="update bimage set image='$imagevalue' where id='$myid'";
	mysqli_query($con,$updimage);
}
$selimage="select image from bimage where id='$myid'";
$selresult=mysqli_query($con,$selimage);
if (mysqli_num_rows($selresult)>0) 
{
while($row=mysqli_fetch_assoc($selresult))
{
$_SESSION['image']=$row['image'];
}	
}
echo $_SESSION['image'];
?>
<script>window.location.replace("miniletterhome.php");</script>
<?php
}
?>