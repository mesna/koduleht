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
		echo "Current PHP version: " . phpversion() . "<br>";
		$host = "localhost";
    	$user = "test";
    	$pass = "t3st3r123";
   		$db = "test";

    	// Create connection
		$conn = new mysqli($host, $user, $pass, $db);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT ID, Andmed FROM mesna_veebirakendused";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "ID: " . $row["ID"]. " - Name: " . $row["Andmed"]. "<br>";
    		}
    	} else {
    		echo "No data to be found";
		}
		$conn->close();
	?>
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
