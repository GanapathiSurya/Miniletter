<!DOCTYPE html>
<html>
<?php
session_start();
error_reporting(0);
$mine=$_SESSION['userid'];
require 'connection.php';
?>
<head>
  <title>mails</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="fontawesome.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  input
  {
    font-size:15px;
    outline: none;
  }
  #myInput {
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myInput::placeholder
{
  font-size: 25px;
}
</style>
</head>
<body background="#f1f1f1">
<a href="mails.php" style="text-decoration:none;"><button class="w3-button w3-padding w3-light-grey w3-margin w3-round">Back</button></a>
<?php
$sql = "SELECT * FROM upload where userid='$mine' order by sno DESC";
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
// 
              echo "<div class=' m-0 w3-border-bottom'>
              <form action='' method='post'>
    
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
<script>
</script>
</body>
</html>