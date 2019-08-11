<?php 
	$bombay=file_get_contents("https://api.darksky.net/forecast/d11f047d7256449222adb35d33942427/19.0760,72.8777");
	$bombay=json_decode($bombay, true);
	$ncr=file_get_contents("https://api.darksky.net/forecast/d11f047d7256449222adb35d33942427/28.7401,77.1025");
	$ncr=json_decode($ncr, true);
	$chennai=file_get_contents("https://api.darksky.net/forecast/d11f047d7256449222adb35d33942427/13.0827,80.2707");
	$chennai=json_decode($chennai, true);
	$kolkata=file_get_contents("https://api.darksky.net/forecast/d11f047d7256449222adb35d33942427/22.5726,88.3639");
	$kolkata=json_decode($kolkata, true);
	// print_r($bombayaqi["data"]["aqi"]);
	$bombayaqi= file_get_contents("http://api.waqi.info/feed/mumbai/?token=cbaf01b25a3486fa2ebcdddab0c3c75179426999");
	$bombayaqi= json_decode($bombayaqi, true);
	$kolkataaqi= file_get_contents("http://api.waqi.info/feed/kolkata/?token=cbaf01b25a3486fa2ebcdddab0c3c75179426999");
	$kolkataaqi= json_decode($kolkataaqi, true);
	$ncraqi= file_get_contents("http://api.waqi.info/feed/delhi/?token=cbaf01b25a3486fa2ebcdddab0c3c75179426999");
	$ncraqi= json_decode($ncraqi, true);
	$chennaiaqi= file_get_contents("http://api.waqi.info/feed/chennai/?token=cbaf01b25a3486fa2ebcdddab0c3c75179426999");
	$chennaiaqi= json_decode($chennaiaqi, true);
?>
<div id="mapid" style="width: 100%; height: 400px;"></div>
<script>
	var mymap = L.map('mapid').setView(new L.LatLng(20, 78), 4);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	L.marker([19.0760, 72.8777]).addTo(mymap)
		.bindPopup("<h4>Mumbai</h4><b>Temperature: </b><?php 
			echo $bombay["currently"]["temperature"]; ?>&deg;F</br><b>UV Index: </b><?php
			echo $bombay["currently"]["uvIndex"]; ?></br><b>Report: </b><?php
			echo $bombay["currently"]["summary"]; ?></br><b>AQI: </b><?php
			echo $bombayaqi["data"]["aqi"]; ?></br><b>Ozone: </b><?php
			echo $bombay["currently"]["ozone"]; 
			?>");
	L.marker([22.5726, 88.3639]).addTo(mymap)
		.bindPopup("<h4>Kolkata</h4><b>Temperature:</b><?php 
			echo $kolkata["currently"]["temperature"]; ?>&deg;F</br><b>UV Index:</b><?php
			echo $kolkata["currently"]["uvIndex"]; ?></br><b>Report:</b><?php
			echo $kolkata["currently"]["summary"]; ?></br><b>AQI: </b><?php
			echo $kolkataaqi["data"]["aqi"]; ?></br><b>Ozone:</b><?php
			echo $kolkata["currently"]["ozone"]; 
			?>");

	L.marker([28.7401, 77.1025]).addTo(mymap)
		.bindPopup("<h4>Delhi NCR</h4><b>Temperature:</b><?php 
			echo $ncr["currently"]["temperature"]; ?>&deg;F</br><b>UV Index:</b><?php
			echo $ncr["currently"]["uvIndex"]; ?></br><b>Report:</b><?php
			echo $ncr["currently"]["summary"]; ?></br><b>AQI: </b><?php
			echo $ncraqi["data"]["aqi"]; ?></br><b>Ozone:</b><?php
			echo $ncr["currently"]["ozone"]; 
			?>");
	L.marker([13.0827, 80.2707]).addTo(mymap)
		.bindPopup("<h4>Chennai</h4><b>Temperature:</b><?php 
			echo $chennai["currently"]["temperature"]; ?>&deg;F</br><b>UV Index:</b><?php
			echo $chennai["currently"]["uvIndex"]; ?></br><b>Report:</b><?php
			echo $chennai["currently"]["summary"]; ?></br><b>AQI: </b><?php
			echo $chennaiaqi["data"]["aqi"]; ?></br><b>Ozone:</b><?php
			echo $chennai["currently"]["ozone"]; 
			?>");
	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

</script>