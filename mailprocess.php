<!DOCTYPE html>
<html>
<?php
//session_start();
require 'connection.php';
?>
<head>
	<title>mailprocess.php</title>
<style type="text/css">
.para
{
	text-indent:50px;
}
.res
{
  text-indent:25px;	
}
#reason
{
	text-align: justify;
}
tr:nth-child(even)
{
	background-color:#f2f2f2;
}
tr:nth-child(odd)
{
	background-color:#e6e6e6;
}
#pertable
{
	text-decoration: underline;
}
</style>
</head>
<body class="w3-white" style="text-align:justify;">
<?php
require 'titlebar.php';
echo "<div class='w3-padding'>";
$myid=$_SESSION['userid'];
$who=$_SESSION['gender'];
$sentid=$_SESSION['receiveid'];
$sentdate=$_SESSION['receivedate'];
$senttime=$_SESSION['receivetime'];
$sentreason=$_SESSION['receivereason'];
$sql ="SELECT * FROM upload where userid='$sentid' and dates='$sentdate'and timing='$senttime' and receiver='$myid' and reason='$sentreason'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) 
    {
    
        $more=$row['more'];
        $name=$row['username'];
        $time=$row['timing'];
        $date=$row['dates'];
        $sent=$row['userid'];
        $reason=$row['reason'];
        $from=$row['fromdate'];
        $to=$row['todate'];
    }
} 
echo "<br><br><span class='w3-margin w3-right'>Date:".$date."</span>";
echo "<span class='w3-margin w3-right'>Time:".$time."</span><br>";
echo "<span class='w3-large w3-margin '><b>From:</b></span>".$sent.".<br>";
echo "<span class='w3-large  w3-margin ' id='reason'><b>Reason:</b><font color='black' size='3'>".$reason."</font>.</span><br>";
if ($_SESSION['gender']='male') 
{
  $who='Sir';
}
else
{
	$who='Madam';
}
echo "<p class='w3-margin w3-large res'>Respected ".$who.",</p>";
echo "<p class='w3-margin w3-medium para' >My Name is ".$name.".</p>";
echo "<p class='w3-medium w3-margin para'>Due to reason mentioned above,I can't able to attend the classes from ".$from." to ".$to.".Please grant me a leave. ";

echo "<br><p class='w3-medium w3-margin para'>Thanking you ".$who.",</p>";
echo "<p class=' w3-margin'><b>More details:</b>".$more."</p>";

?>
<form action="mailfurtherprocess.php" method="post">
<button class="w3-button  w3-padding-small w3-green w3-round" name="give">Give</button>
<button class="w3-button  w3-padding-small w3-red w3-round" name="reject">Reject</button>
</form>
<?php
$sql="select * from status where sentid='$sentid' and dates='$sentdate' and times='$senttime' and receiveid='$myid'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) 
{
while($row=mysqli_fetch_assoc($result)) 
 {
   $status=$row['status'];
 }
echo "<br><span class=' w3-padding w3-margin w3-light-grey '>You ".$status."</span>";	
}
?>
<br><br><br>
<?php
$response="select receiveid,status from status where sentid='$sent' and dates='$date' and times='$time'";
$responseresult=mysqli_query($con,$response);
if((mysqli_num_rows($responseresult)>0)) 
{
	
	echo "<table class='w3-border w3-white w3-border-blue'>";
 while ($row=mysqli_fetch_assoc($responseresult)) 
 {
 	echo "<tr class='w3-border-bottom w3-white w3-border-blue'><td class='w3-padding'>".$row['receiveid']."</td><td class='w3-padding'>".$row['status']."</td></tr>";
 }
echo "</table>";
}
?>
</div>
</body>
</html>