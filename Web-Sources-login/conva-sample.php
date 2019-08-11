<body>
<?php
	include './../Web-Sources/header.php';
?>
<div id="SPMchartContainer" style="height: 300px; width: 30%;"></div>

</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("SPMchartContainer", {
	animationEnabled: true,
	title: {
		text: "Current State SPM Level"
	},
	axisX: {
		title: "Year",
		valueFormatString: "MM YY"
	},
	axisY: {
		title: "SPM Level",
		includeZero: false
	},
	data: [{
		type: "line",
		name: "CPU Utilization",
		connectNullData: true,
		//nullDataLineDashType: "solid",
		xValueType: "dateTime",
		// xValueFormatString: "MM,YY",
		dataPoints: [
			{ x: new Date(2015,0) , y: 154 },
			{ x: new Date(2015,1) , y: 156 },
			{ x: new Date(2015,2) , y: 157 },
			{ x: new Date(2015,3) , y: 158 },
			{ x: new Date(2015,4) , y: 159 },
			{ x: new Date(2015,5) , y: 159 },
			{ x: new Date(2015,6) , y: 161 },
			{ x: new Date(2015,7) , y: 162 },
			{ x: new Date(2015,8) , y: 165 },
			{ x: new Date(2015,9) , y: 168 },
			{ x: new Date(2015,10) , y: 171 },
			{ x: new Date(2015,11) , y: 172 },
			// { x: new Date(2015,0) , y: 154 },
			// { x: new Date(2015,0) , y: 154 },
			// { x: new Date(2015,0) , y: 154 },
			// { x: new Date(2015,0) , y: 154 },

		]
	}]
});
chart.render();

}
</script>