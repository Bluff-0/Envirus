<!DOCTYPE html>
<html>
<head>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>

</head>
<style type="text/css">
		body{
			background-image: url('./ap.png');
			background-size: cover;
		}
		#SPMchartContainer{
			opacity: 0.75;
		}
	</style>
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
		text: "Predicted SPM Level of Andhra Pradesh"
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
			{ x :2001, y: 52 },
{ x :2002, y: 78 },
{ x :2003, y: 124 },
{ x :2004, y: 173 },
{ x :2005, y: 167 },
{ x :2006, y: 151 },
{ x :2007, y: 101 },
{ x :2008, y: 371 },
{ x :2009, y: 287 },
{ x :2010, y: 295 },
{ x :2011, y: 367 },
{ x :2012, y: 311 },
{ x :2013, y: 191 },
{ x :2014, y: 102 },
{ x :2015, y: 90 },
{ x :2016, y: 95 },
{ x :2017, y: 151 },
{ x :2018, y: 168 },
{ x :2019, y: 209 },
{ x :2020, y: 131 },
{ x :2021, y: 229 },
{ x :2022, y: 173 },
{ x :2023, y: 170 },
{ x :2024, y: 370 },
		]
	}]
});
chart.render();

}
</script>
</html>
