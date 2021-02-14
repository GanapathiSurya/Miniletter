$(document).ready(function()
  {
  val="<?php echo $_SESSION['color'];?>";
  $("#head").css("background-color",val);
   $("#fl").css("background-color",val);
   if (val=='orange') {

  $(".flagcompose").css("background-color","#0059b3");
   }
  });

function w3_open() {
  document.getElementById("mineSidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mineSidebar").style.display = "none";
}