<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
		body{
			background-image: url('./up.png');
			background-size: cover;
		}
		#SPMchartContainer{
			opacity: 0.75;
		}
	</style>
</head>
<body>
<header>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./../Web-Sources-login">Envirus</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Air Report</a></li>
      <li><a href="#">Use Carpool</a></li>
      <li><a href="./../AQI-Prediction/">AQI Prediction</a></li>
      <li><a href="#test-form" class="popup-with-form">Weeklog</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./../Web-Sources-login/exit.php"><span class="glyphicon glyphicon-log-in"></span> &emsp;Exit</a></li>
    </ul>
  </div>
</nav>
</header>
	<br><br><br>
	<div id="SPMchartContainer" style="height: 100%; width: 100%;"></div>
</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("SPMchartContainer", {
	animationEnabled: true,
	title: {
		text: "Predicted SPM Level of Uttar Pradesh"
	},
	axisX: {
		title: "Year",
		// valueFormatString: "YY"
	},
	axisY: {
		title: "SPM Level",
		includeZero: false
	},
	data: [{
		type: "line",
		name: "SPM Level",
		connectNullData: true,
		// nullDataLineDashType: "solid",
		// xValueType: "dateTime",
		// xValueFormatString: "MM,YY",
		dataPoints: [
			{ x :2001, y: 692 },
{ x :2002, y: 503 },
{ x :2003, y: 771 },
{ x :2004, y: 520 },
{ x :2005, y: 433 },
{ x :2006, y: 562 },
{ x :2007, y: 552 },
{ x :2008, y: 349 },
{ x :2009, y: 710 },
{ x :2010, y: 712 },
{ x :2011, y: 364 },
{ x :2012, y: 260 },
{ x :2013, y: 256 },
{ x :2014, y: 434 },
{ x :2015, y: 342 },
{ x :2016, y: 424 },
{ x :2017, y: 394 },
{ x :2018, y: 233 },
{ x :2019, y: 396 },
{ x :2020, y: 687 },
{ x :2021, y: 594 },
{ x :2022, y: 550 },
{ x :2023, y: 689 },
{ x :2024, y: 679 },
		]
	}]
});
chart.render();

}
</script>
</html>
