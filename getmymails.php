<!DOCTYPE html>
<html>
<?php
//session_start();
require 'connection.php';
$color=$_SESSION['color'];
if ($color=="orange") 
{
  $flagcolor="lightgreen";
  $searchcolor="#0059b3";
  $searchtextcolor="white";
}
else
{
  $flagcolor="#f2f2f2";
  $searchcolor="#f2f2f2";
  $searchtextcolor="black";
}
require 'connection.php';
?>
<head>
  <style type="text/css">
   /* .maildetails
    {
      background-color:lightgreen;
    }*/
  </style>
<?php
$myid=$_SESSION['userid'];
?>
</head>
<body background="#f1f1f1" >
<?php
$sql = "SELECT * FROM upload where receiver='$myid' order by sno DESC";
$result = mysqli_query($con,$sql);
if(!$result) 
{
	echo "error is".mysqli_error($con);
}
if (mysqli_num_rows($result) > 0) 
{
?>
<div style="height:30px;width:30px;text-align:center;" class="w3-padding-small">
<form action="filter.php" method="post">
<table>
<tr>
<td>
<input type="search" name="search"  placeholder="Type in Id.." class="w3-border pt-2">
</td>
<td>
<button type="submit" name='filter_submit' class=" w3-border-0 pt-2 w3-padding-small w3-round-medium" style="background-color:<?php echo $searchcolor;?>;color:<?php echo $searchtextcolor;?>">Search</button> 
</td>
</tr>
</table>
</form>
</div>
<br>
<?php
  while($row = mysqli_fetch_assoc($result)) 
  {
  	$resid=$row['userid'];
  	$resreason=$row['reason'];
  	$resdate=$row['dates'];
  	$restime=$row['timing'];
//  	<option class='w3-button' name='close'>&#215;</button>
  	          echo "<div class=\" m-0 w3-border-bottom\">
  	          <form action='mailsprocess.php' method='post'>
  	
  <div class='row m-0'>
  <div class='col-sm m-0 '>
  <table>
  <tr>
  <td>&#128231;</td>
  <td><b><font size='3' class='w3-text-blue-grey'><span class='search'><input type='text' class='w3-input  w3-border-0 w3-text-black ' value='$resid' name='resid' readonly></span></font></b></td>
  </tr>
  </table>
  </div>
 <div class='col-sm m-0 ' id='reason'><b><input type='text' class='w3-input w3-border-0 w3-text-black ' value='$resreason' readonly name='resreason'></b></div>
 <div class='col-sm m-0 '>
 <table>
 <tr>
 <td><input type='text' class='w3-input w3-border-0' value='$resdate' readonly name='resdate'></td>
 <td><input type='text' class='w3-input w3-border-0' value='$restime' readonly name='restime'></td>
 <td><input type='submit' class='w3-button  w3-hover-dark-gray w3-hover-text-white w3-text-black w3-round w3-small ' value='GO' name='mail_submit' id='nmobilego' style='background-color:$flagcolor;'>
     <input type='submit' class='w3-button  w3-hover-dark-gray w3-hover-text-white w3-text-black w3-round w3-small ' value='&#8594;' name='mail_submit' id='mobilego' class='flagbutton' style='background-color:$flagcolor;'>
 </td>
 </tr></table></div>
  	   
  	          </div></form></div>";
  	          
  	         // echo "<button class=\"w3-padding w3-pale-green w3-border-0 w3-round\">Confirm</button> <button class=\"w3-padding w3-pale-red w3-border-0 w3-round\">Reject</button></div></div>";
  	          }

} 
else
{
echo "<div class='w3-padding w3-xxlarge w3-center'><i class='fa fa-search-minus'></i>No Mails</div>";
}
?>
</body>
</html>