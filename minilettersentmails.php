<!DOCTYPE html>
<html>
<?php
//session_start();
require 'connection.php';
?>
<style type="text/css">
 input
  {
    font-size:15px;
    outline: none;
  }
</style>
<head>
<script type="text/javascript" src="titlebar.js"></script>
	<title>Miniletter sent mails</title>
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
<div class="w3-rest w3-white" style="height:700px;overflow-y:auto" class="w3-padding">
<?php
$sql = "SELECT * FROM upload where userid='$myid' order by sno DESC";
$result = mysqli_query($con,$sql);
if(!$result) 
{
  echo "error is".mysqli_error($con);
}
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    $resid=$row['userid'];
    $resreason=$row['reason'];
    $resdate=$row['dates'];
    $restime=$row['timing'];
    $receiver=$row['receiver'];
 echo "<div class=' m-0 w3-border-bottom w3-border-grey'>
              <form action='forwardprocess.php' method='post'>
    
  <div class='row m-0'>

  <div class='col-sm m-0 '>
  <table>
  <tr>
  <td>&#128231;</td>
  <td><b><font size='4' class='w3-text-black'><span><input type='text' class='w3-input  w3-border-0 w3-text-black ' value='$receiver' name='receiver' readonly></span></font></b></td>
  </tr>
  </table>
  </div>
 <div class='col-sm m-0 ' id='reason'><b><input type='text' class='w3-input w3-border-0 w3-text-black ' value='$resreason' readonly name='resreason'></b></div>
 <div class='col-sm m-0 '>
 <table>
 <tr>
 <td><input type='text' class='w3-input w3-border-0' value='$resdate' readonly name='resdate'></td>
 <td><input type='text' class='w3-input w3-border-0' value='$restime' readonly name='restime'></td>
 </tr></table></div></div>";
$sqlsent="select receiveid,status from status where sentid='$resid' and dates='$resdate' and times='$restime'";
$sentresult=mysqli_query($con,$sqlsent);
echo "<table class='w3-margin-left table'>";
while($row=mysqli_fetch_assoc($sentresult))
{
  if($row['status']=='confirmed')
  {
  echo "<tr><td>".$row['receiveid']."</td><td>".$row['status']."</td><td><font>&#10004;</font></td></tr>";
  
  }
  elseif($row['status']=='rejected')
  {
    echo "<tr><td>".$row['receiveid']."</td><td>".$row['status']."</td><td><font>&#10006;</font></td></tr>";
  }
  }
echo "</table>";
echo "</form></div>";
              
              }

} 
else
{
echo "<div class='w3-padding w3-xxlarge w3-center'><i class='fa fa-search-minus'></i>No Mails</div>";
}
?>

</div>  
</div>
<?php
}
?>
</body>
</html>