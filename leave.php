<?php
//session_start();
require 'connection.php';
$from=$_POST['from'];
$to=$_POST['to'];
$towhom=$_POST['towhom'];
$arraytowhom=explode(",",$towhom);
$reason = $_POST['reason'];
$more=$_POST['contact'];
$uname=$_SESSION['username'];
$uid=$_SESSION['userid'];
$phone = $_SESSION['phone'];
$password = $_SESSION['userpwd'];
$gender = $_SESSION['gender'];
date_default_timezone_set("Asia/Kolkata");
$dates=date("M d");
$timing=date("h:ia");
if (isset($_POST['leave_form_submit'])) 
{
    if(empty($_POST['from'])||empty($_POST['to'])||empty($_POST['towhom'])||empty($_POST['reason'])|| empty($_POST['contact'])) 
    {
       echo $_POST['from'];
       echo $_POST['to'];
       echo $_POST['towhom'];
       echo $_POST['reason'];
       echo "30";
    ?>
    <script>window.location.replace("leaveform.php?Empty=Please Fill all the Blanks");</script>
    <?php
    }
    elseif(!empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['towhom']) && !empty($_POST['reason']) && !empty($_POST['contact'])) 
    {
    foreach($arraytowhom as $value)
     {
      $len=strlen($value);
    if ($len>3) 
    {
      echo "40";
    if(($value[0]!='m') or  ($value[1]!='l') or ($value[2]!='@')) 
    {
        ?>
    <script>window.location.replace("leaveform.php?format=Please fill the receiverid correctly");</script>
    <?php
       echo "44";
    }   
    else
    {
      echo "hee";
    $sql="select * from registration where userid='$value'";
    $checkid=mysqli_query($con,$sql);
     if (mysqli_num_rows($checkid)==0) 
     {
           ?>
    <script>window.location.replace("leaveform.php?notexist=Entered id not exists.");</script>
    <?php
         echo "54";
     }
     else
     {
         echo $uname." ".$phone." ".$gender." ".$uid." ".$value." ".$reason." ".$more." ".$dates." ".$timing." ".$from." ".$to;
     $query="INSERT INTO `upload`(`username`, `phone`, `gender`, `userid`, `receiver`, `reason`, `more`, `dates`, `timing`,`fromdate`,`todate`) VALUES ('$uname','$phone','$gender','$uid','$value','$reason','$more','$dates','$timing','$from','$to')";
      $result=mysqli_query($con,$query);
      if ($result)
      {
        $_SESSION['to']=$to;
        $_SESSION['from']=$from;
        $_SESSION['towhom']=$towhom;
        $_SESSION['reason']=$reason;
        ?>
    <script>window.location.replace("minilettersentmails.php");</script>
    <?php
      }
       else
       {
        echo "not inserted:".mysqli_error($con);
       }
     }
    }
  }
  else
  {
    echo "78";
    ?>
    <script>window.location.replace("leaveform.php?format=Please fill the receiverid correctly");</script>
    <?php
  }
 }
 }
}


?>






 
   