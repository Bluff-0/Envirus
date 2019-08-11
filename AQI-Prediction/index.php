<html>
<head>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:500,900&display=swap" rel="stylesheet">
	<title>Indian State List</title>
	<style type="text/css">
		body{ background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12); }
		.prediction{ text-align: center; margin-top: 70px;	font-family: 'Roboto', sans-serif;}
		.prediction > h2{color: #ccffee;}
		.prediction > p{ text-align: center; padding: 20px 120px 20px 120px; font-size: 20px;}
		.prediction > form > input{ width: 300px; height: 50px;	border-radius: 10px; padding-left: 20px; font-size: 14px; }
		.prediction > form > input:hover{ background-color: #affac3; font-size: 18px; padding-left: 14%; width: 500px; transition-duration: 0.5s; }
		.prediction > form > select{ padding-left: 20px; width: 300px; height: 50px; border-radius: 10px; }
		.prediction > form > select:hover{ background-color: #affac3; font-size: 18px; text-align: center; width: 500px; transition-duration: 0.5s; }
		.prediction > form > button{ background-color: #32a852; width: 300px; height: 50px; border-radius: 10px; }
		.prediction > form > button:hover{ background-color: #ccffee; transition-duration: 1s; }
		.prediction > div{ height: 70px; width: 80%; text-align: center; align-self: center; background-color: #fff; padding: 20px 20px 20px 20px; font-size: 20px; margin-left: 6.5em; border-radius: 20px; background-color: #ccffee;}
	</style>
</head>
<body>
<?php 
	session_start();
	$state=$_SESSION['state'];
    if($state=="delhi")
    {
    	$x="delhi";
    }
    elseif ($state=="uttar pradesh") {
    	$x="up";
    }
    elseif($state=="andhra pradesh")
    {
    	$x="ap";
    }
?>
<header>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./../Web-Sources-login">Envirus</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="./../Web-Sources-login/conva-<?php echo $x;?>.php">Air Report</a></li>
      <li><a href="#">Use Carpool</a></li>
      <li class="active"><a href="./../AQI-Prediction/">AQI Prediction</a></li>
      <li><a href="#test-form" class="popup-with-form">Weeklog</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./../Web-Sources-login/exit.php"><span class="glyphicon glyphicon-log-in"></span> &emsp;Exit</a></li>
    </ul>
  </div>
</nav>
</header>
<div class="prediction">
<h2>Air Quality Index Prediction</h2>
<p>The AQI is an index for reporting daily air quality. It tells you how clean or polluted your air is, and what associated health effects might be a concern for you. The AQI focuses on health effects you may experience within a few hours or days after breathing polluted air. Here you will get to know the AQI of a state for a specific number of cars present there.</p>
  <form action="{{ url_for('predict')}}"method="post">
   	<input type="text" name="cars" placeholder="Number of Cars"><br><br>
   	<select name=list id="ddlViewBy">
	<option value="">Select State</option>
	<option value="1">Andhra Pradesh</option>
	<option value="2">Assam</option>
	<option value="3">Bihar</option>
	<option value="4">Chandigarh</option>
	<option value="5">Chhattisgarh</option>
	<option value="6">Dadra and Nagar Haveli</option>
	<option value="7">Daman and Diu</option>
	<option value="8">Delhi</option>
	<option value="9">Goa</option>
	<option value="10">Gujarat</option>
	<option value="11">Haryana</option>
	<option value="12">Himachal Pradesh</option>
	<option value="13">Himachal Pradesh</option>
	<option value="14">Jharkhand</option>
	<option value="15">Karnataka</option>
	<option value="16">Kerala</option>
	<option value="17">Madhya Pradesh</option>
	<option value="18">Maharashtra</option>
	<option value="19">Manipur</option>
	<option value="20">Meghalaya</option>
	<option value="21">Mizoram</option>
	<option value="22">Nagaland</option>
	<option value="23">Orissa</option>
	<option value="24">Pondicherry</option>
	<option value="25">Punjab</option>
	<option value="26">Rajasthan</option>
	<option value="27">Tamil Nadu</option>
	<option value="28">Uttarakhand</option>
	<option value="29">Uttar Pradesh</option>
	<option value="30">West Bengal</option>
	</select><br><br>
	<button type="submit" onclick="fun();">Predict</button>
	</form>
	<br><br>
	<div><p>{{ prediction_text }}</p></div>
</div>
</body>
<script type="text/javascript">
	function fun() {
		// body...
		var e = document.getElementById("ddlViewBy");
		var strUser = e.options[e.selectedIndex].value;
		console.log(strUser);
	}
</script>
</html>
