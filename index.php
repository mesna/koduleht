<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/basic_style.css">
	<title>Marko Esna</title>
  </head> 
  <body>
    <h2>My homepage</h2>
	<img src="images/ise.jpg" alt="Smiley face" width="300" height="250"/>
	<p>
	<?php include "php/db_connection.php"; ?>
	</p>
	<p id="skript"></p>
	<script>
  		document.getElementById("skript").innerHTML = "This text magically appeared with JavaScript";
  </script>
  <p>
 	<a href="http://validator.w3.org/check?uri=referer">
  		<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 	</a>
  </p>
  </body>
</html>
