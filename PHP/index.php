<?php
//File to read
//$file = '/sys/bus/w1/devices/28-000003dcfad1/w1_slave';

//Read the file line by line
//$lines = file($file);

//Get the moist from second line 
//$moist = explode('=', $lines[1]);

//Setup some nice formatting (i.e. 21,3)
//$moist = number_format($moist[1] / 1000, 1, '.', '');

$moist = "I am here";
?>

<!doctype html>
<html lang="en">
	<head>
		<title>IPRO 497</title>
	  	<meta charset="utf-8" />
	  	<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" />
	  	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
 	</head>

	<body>
		<div id="content-wrapper">
		    <header>
		            <h1>IPRO Moisture Sensor Data</h1>
		    </header>

		    <p><?php echo "$moist"; ?></p>

		    <?php
		    	date_default_timezone_set("America/Chicago");
				echo "Time: " . date("Y-m-d l h:i:sa") . "<br>";
			?>
		</dir>
	</body>
</html>


