<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="basic_style.css">
	<title>Marko Esna</title>
  </head>
  <body>
    <h2>My homepage</h2>
	<img src="images/ise.jpg" alt="Smiley face" width="300" height="250"/>
	<p>
	<?php
		// Prints the current PHP verison
		echo 'Current PHP version: ' . phpversion();
	?>
	</p>
  </body>
</html>
