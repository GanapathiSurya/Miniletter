<!DOCTYPE html>
<html>
<?php
require 'connection.php';
require 'session.php';
?>
<head>
	<title>mails</title>
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
#searchbtn
{
 background-color: rgb(0,102,153); 
}
@media screen and (max-width:800px)
{
 #mobilego
 {
 	display: block;
 }

 #nmobilego
 {
 	display:none;
 }
}
@media screen and (min-width:801px)
{
 #mobilego
 {
 	display:none;
 }

 #nmobilego
 {
 	display:block;
 }
}
</style>
</head>
<body background="#f1f1f1">
<?php
if (isset($_SESSION['userid'])) 
{

$sql = "SELECT * FROM upload where receiver='$myid' order by sno DESC";
$result = mysqli_query($con,$sql);
if(!$result) 
{
  echo "error is".mysqli_error($con);
}
if (mysqli_num_rows($result) > 0) 
{
?>
<div id="txtHint"></div>
<?php
} 
else
{
echo "<div class='w3-padding w3-xxlarge w3-center'><i class='fa fa-search-minus'></i>No Mails</div>";
} 
}
?>
<script>
var str="<?php echo $myid;?>";
showmails(str);
function showmails(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getmymails.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>