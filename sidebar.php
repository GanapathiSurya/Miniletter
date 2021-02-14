<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="w3-card w3-white w3-center">
<div class="w3-hover-light-grey w3-white w3-padding w3-border-bottom ">
<a href="miniletterhome.php" style="text-decoration: none;font-size:16px;color:black">Home</a>
</div>
<div class="w3-hover-light-grey w3-white w3-padding w3-border-bottom ">
<a href="minilettermails.php" style="text-decoration: none;font-size:16px;color:black">Inbox</a>
</div>
<div class="w3-hover-light-grey w3-white w3-padding w3-border-bottom">
<a href="minilettersentmails.php" style="text-decoration: none;font-size:16px;color:black">Sent</a></div>
<div class="w3-hover-white w3-white w3-dropdown-hover ">
    <button class="w3-button w3-hover-white w3-white" style="font-size:16px;">Theme<i class="glyphicon glyphicon-triangle-bottom"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-border w3-padding-small">
      <form method="post" action="colors.php">
    <button style="background-color:rgb(255,173,51);width:20px;height:20px;border:none;" id='orange' name="color" value="rgb(255,173,51)"></button> 
    <button style="background-color:rgb(0,102,153);width:20px;height:20px;border:none;" id='blue' name="color" value="rgb(0,102,153)"></button>
    <button style="background-color:rgb(0,153,0);width:20px;height:20px;border:none;" id='green' name="color" value="rgb(0,153,0)"></button>
     <button style="background-color:rgb(255,102,179);width:20px;height:20px;border:none;" id='pink' name="color" value="rgb(255,102,179)"></button> 
     <button style="background-color:rgb(0,0,0);width:20px;height:20px;border:none;" id='black' name="color" value="rgb(0,0,0)"></button> 
     <button style="background-color:rgb(250,44,7);width:20px;height:20px;border:none;" id='red' name="color" value="rgb(250,44,7)"></button>
     <button style="background-color:rgb(51,153,255);width:20px;height:20px;border:none;" id='skyblue' name="color" value="rgb(51,153,255)"></button>
     <button style="background-color:rgb(179,45,0);width:20px;height:20px;border:none;" id='brown' name="color" value="rgb(179,45,0)"></button> 
     <button style="background-color:rgb(128,128,128);width:20px;height:20px;border:none;" id='grey' name="color" value="rgb(128,128,128)"></button> 
     <button style="background-color:rgb(153,204,0);width:20px;height:20px;border:none;" id='lightgreen' name="color" value="rgb(153,204,0)"></button> 
     <button style="background-color:rgb(31,122,122);width:20px;height:20px;border:none;" id='ablue' name="color" value="rgb(31,122,122)"></button>
     <button style="background-color:rgb(51,204,204);width:20px;height:20px;border:none;" id='purple' name="color" value="rgb(51,204,204)"></button>  
     <button class="w3-white w3-border-0" name="color" value="orange"><img src="flag.jpg" class="" style="width:40px;height:40px;" ></button>
   </form>
    </div>
</div><br>
<div class="w3-hover-white w3-white w3-dropdown-hover">
  <button class="w3-button w3-hover-white w3-white btn btn-block" style="font-size:15px;">Background<i class="glyphicon glyphicon-triangle-bottom"></i></button>
  <div class="w3-dropdown-content w3-padding w3-border">
    <form method="post" action="background.php">
   <table>
       <tr>
           <td><button class="w3-white w3-border-0" name="wp" value='w3.jpg'><img src="w3.jpg" style="width:80px;height:80px;margin-top:10px;" ></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='w4.jpg'><img src="w4.jpg" style="width:80px;height:80px;margin-top:10px;"></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='brown1.jpg'><img src="brown1.jpg" style="width:80px;height:80px;margin-top:10px;"></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='pink1.jpg'><img src="pink1.jpg" style="width:80px;height:80px;margin-top:10px;"></button></td>
       </tr>
       <tr>
           <td><button class="w3-white w3-border-0" name="wp" value='blue2.jpg'><img src="blue2.jpg" style="width:80px;height:80px;margin-top:10px;" ></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='blue3.jpg'><img src="blue3.jpg" style="width:80px;height:80px;margin-top:10px;"></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='blue5.jpg'><img src="blue5.jpg" style="width:80px;height:80px;margin-top:10px;"></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='red1.jpg'><img src="red1.jpg" style="width:80px;height:80px;margin-top:10px;"></button></td>
       </tr><tr>
           <td><button class="w3-white w3-border-0" name="wp" value='green1.jpg'><img src="green1.jpg" style="width:80px;height:80px;margin-top:10px;" ></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='green2.jpg'><img src="green2.jpg" style="width:80px;height:80px;margin-top:10px;"></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='green3.jpg'><img src="green3.jpg" style="width:80px;height:80px;margin-top:10px;" ></button></td>
           <td><button class="w3-white w3-border-0" name="wp" value='green4.jpg'><img src="green4.jpg" style="width:80px;height:80px;margin-top:10px;" ></button></td>
       </tr>
   </table>
   <button name="wp" value=''>None</button>
 </form>
    </div>
  </div>
 </div>
</body>
</html>