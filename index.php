<?php
$servername = "localhost";
$username = "id11869187_holidaytime";
$password = "Gvgs@2000Vgan@123";
$database = "id11869187_miniletter";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
<html>
<body><br><br><br><br><br><br>
<center><img src="email.gif" width='500' height='400'></center>
<script type="text/javascript">
setTimeout(function(){window.location="miniletterhome.php";}, 3000);
</script>
</body>
</html>