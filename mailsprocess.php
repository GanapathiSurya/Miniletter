<?php
require 'connection.php';
?>
<?php
$insid=$_POST['resid'];
$insreason=$_POST['resreason'];
$insdate=$_POST['resdate'];
$instime=$_POST['restime'];
$myid=$_SESSION['userid'];
$who=$_SESSION['gender'];
/*$check="select * from mailsprocess where insid='$insid'and insreason='$insreason'and insdate='$insdate'and instime='$instime'";
$checkresult=mysqli_query($con,$check);
if (mysqli_num_rows($checkresult)==0) 
{
$sql="insert into mailsprocess values('$insid','$insreason','$insdate','$instime')";
mysqli_query($con,$sql);
}*/
$_SESSION['receiveid']=$_POST['resid'];
$_SESSION['receivedate']=$_POST['resdate'];
$_SESSION['receivetime']=$_POST['restime'];
$_SESSION['receivereason']=$_POST['resreason'];
?>
<script>window.location.replace("mailprocess.php");</script>
<?php
?>

