<?php
//session_start();
require 'connection.php';
if (isset($_POST['give'])) 
{
$myid=$_SESSION['userid'];
$id=$_SESSION['receiveid'];
$date=$_SESSION['receivedate'];
$time=$_SESSION['receivetime'];
$reason=$_SESSION['receivereason'];
$sql="select * from status where sentid='$id' and dates='$date' and times='$time' and receiveid='$myid'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)==0) 
{
$insert="insert into status(sentid,dates,times,receiveid,status) values ('$id','$date','$time','$myid','none')";
mysqli_query($con,$insert); 
}
$update="update status set status='confirmed' where sentid='$id' and dates='$date' and times='$time' and receiveid='$myid'";
mysqli_query($con,$update);
?>
<script>window.location.replace("mailprocess.php");</script>
<?php
}
if (isset($_POST['reject'])) 
{
$myid=$_SESSION['userid'];
$id=$_SESSION['receiveid'];
$date=$_SESSION['receivedate'];
$time=$_SESSION['receivetime'];
$reason=$_SESSION['receivereason'];
$sql="select * from status where sentid='$id' and dates='$date' and times='$time' and receiveid='$myid'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)==0) 
{
$insert="insert into status(sentid,dates,times,receiveid,status) values ('$id','$date','$time','$myid','none')";
mysqli_query($con,$insert); 
}
$update="update status set status='rejected' where sentid='$id' and dates='$date' and times='$time' and receiveid='$myid'";
mysqli_query($con,$update);
?>
<script>window.location.replace("mailprocess.php");</script>
<?php
}
?>
