<!DOCTYPE html>
<html>
<?php
//session_start();
require 'connection.php';
?>
<head>
	<title>filtermails</title>
</head>
<body background="#f1f1f1"> 
<?php
require 'titlebar.php';
?>
<?php
if(isset($_POST['filter_submit']))
{
$var=$_POST['search'];
$sql = "SELECT * FROM upload where receiver='$myid' order by sno DESC";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    $resid=$row['userid'];
    $resreason=$row['reason'];
    $resdate=$row['dates'];
    $restime=$row['timing'];
    if(strpos($resid,$var))
    {
echo "<div class='m-0 w3-border-bottom'>
      <form action='mailsprocess.php' method='post'>
  <div class='row m-0'>
  <div class='col-sm m-0 '>
  <table>
  <tr>
  <td>&#128231;</td>
  <td><b><font size='4' class='w3-text-black'><span class='search'><input type='text' class='w3-input  w3-border-0 ' value='$resid' name='resid' readonly></span></font></b></td>
  </tr>
  </table>
  </div>
 <div class='col-sm m-0 ' id='reason'><b><input type='text' class='w3-input w3-border-0 w3-text-black ' value='$resreason' readonly name='resreason'></b></div>
 <div class='col-sm m-0 '>
 <table>
 <tr>
 <td><input type='text' class='w3-input w3-border-0' value='$resdate' readonly name='resdate'></td>
 <td><input type='text' class='w3-input w3-border-0' value='$restime' readonly name='restime'></td>
 <td><input type='submit' class='w3-button w3-light-gray w3-hover-dark-gray w3-hover-text-white w3-text-black w3-round w3-small ' value='Go>' name='mail_submit'></td>
 </tr></table></div>
       
              </div></form></div>";

    } 
   }
  }
}
?>
</body>
</html>