<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php

		$myFruits = array("apple","litchi","cherry"); //array syntax

 		 for ($i=0; $i<sizeof($myFruits) ; $i++)
   			{ 
				echo "<p>the element in the array is:".$myFruits[$i]."</p>";
  			}
	?>
</body>
</html>