<?php
	$con = mysqli_connect("localhost", "zodiacloginregisterdb", "") or die("Connection failed: " . mysqli_connect_error());
	mysqli_select_db($con,'zodiacloginregisterdb');
?>