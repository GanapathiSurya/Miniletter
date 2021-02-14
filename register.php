<?php
if (isset($_POST['register_submit'])) 
{
require 'connection.php';
$name=$_POST['name'];
$uid=$_POST['uid'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$gender = $_POST['gender'];
$_SESSION['entername']=$name;
$_SESSION['enteruid']=$uid;
$_SESSION['enterphone']=$phone;
$_SESSION['enteremail']=$email;
$_SESSION['entergender']=$gender;
$useridlen=strlen($uid);
$phonelen=strlen($phone);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@',$password);
$epassword=md5($password);
$econfirmpassword=md5($confirmpassword);
 if(empty($_POST['name']) || empty($_POST['uid']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmpassword']) || empty($_POST['gender'])) 
 {
?>
<script>window.location.replace("registerpage.php?Empty=Please Fill all the Blanks");</script>
<?php
 }
 elseif(!empty($_POST['name'])  && !empty($_POST['uid']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword']) && !empty($_POST['gender']) && $phonelen==10 && $password==$confirmpassword) 
 {
  if ($useridlen>3) 
  {
    if(($uid[0]!='m') or  ($uid[1]!='l') or ($uid[2]!='@') or strpos($uid,",")) 
    {
?>
<script>window.location.replace("registerpage.php?uidformat=Please fill the userid in specified format");</script>
<?php
    }   
    else
    {
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) 
    {
    ?>
<script>window.location.replace("registerpage.php?invpassword=password must contain atleast 8 characters,Out of them atleast 1 special symbol,1 uppercase,1 lowercase,1 digit.");</script>
<?php     
    }
    else
    {
    $sql="select * from registration where userid='$uid'";
    $checkid=mysqli_query($con,$sql);
     if (mysqli_num_rows($checkid)!=0) 
     {
    ?>
<script>window.location.replace("registerpage.php?exist=Sorry,Please choose another id.Entered id already taken.");</script>
<?php     
     }
     else
     {
     $query="insert into registration values ('$name','$email','$phone','$epassword','$econfirmpassword','$gender','$uid')"; 
     $result=mysqli_query($con,$query);
      if (($result))
      {
        $_SESSION['username']=$name;
        $_SESSION['userid']=$uid;
        $_SESSION['email']=$email;
        $_SESSION['phone']=$phone;
        $_SESSION['gender']=$gender;
    ?>
<script>window.location.replace("miniletterhome.php");</script>
<?php     
      }
      else 
      {
          echo "not inserted". mysqli_error($con);
      }
     }
     }
    }
  }
  else
  {
    ?>
<script>window.location.replace("registerpage.php?uidformat=Please fill the userid in specified format");</script>
<?php     
  }
 }
 else
 {
  if ($phonelen!=10) {  
    ?>
<script>window.location.replace("registerpage.php?incnum=Entered number is not a 10-digit number");</script>
<?php 
  }
  if ($password!=$confirmpassword) 
  {
    ?>
<script>window.location.replace("registerpage.php?incpwd=Entered passwords must be matched.");</script>
<?php 
  }
 }
 }
?>