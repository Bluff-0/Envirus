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
			background-image: url('./delhi.png');
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
		text: "Predicted SPM Level of Delhi"
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
			{ x :2001, y: 323 },
{ x :2002, y: 398 },
{ x :2003, y: 321 },
{ x :2004, y: 365 },
{ x :2005, y: 351 },
{ x :2006, y: 444 },
{ x :2007, y: 366 },
{ x :2008, y: 374 },
{ x :2009, y: 255 },
{ x :2010, y: 344 },
{ x :2011, y: 243 },
{ x :2012, y: 278 },
{ x :2013, y: 239 },
{ x :2014, y: 405 },
{ x :2015, y: 384 },
{ x :2016, y: 615 },
{ x :2017, y: 606 },
{ x :2018, y: 663 },
{ x :2019, y: 828 },
{ x :2020, y: 934 },
{ x :2021, y: 940 },
{ x :2022, y: 906 },
{ x :2023, y: 895 },
{ x :2024, y: 903 },
		]
	}]
});
chart.render();

}
</script>
</html>
