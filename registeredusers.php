<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$getuser="select count(userid) from registration where 1";
$getuserres=mysqli_query($con,$getuser);
if (mysqli_num_rows($getuserres)>0) 
{
  while ($row=mysqli_fetch_assoc($getuserres)) 
  {
   $number=$row["count(userid)"];
  }
}
?>
<div id="register_values" style=" height: 300px;">
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    var number=parseInt("<?php echo $number;?>");
    //alert(number);
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Miniletter population", number, "lightgrey"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "TOTAL NUMBER OF USERS UTILIZING OUR SERVICE..",
        width:300,
        height: 300,
        bar: {groupWidth: "25%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("register_values"));
      chart.draw(view, options);
  }
  </script>
</body>
</html>