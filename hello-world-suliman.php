<!DOCTYPE html>
<html>
<head>
	<title>Helloworld</title>
</head>
<body>
		
		<?php

		function Helloworld($name) {
			if ($name == null) {
				echo "Hello world";
			} else {
				echo "Hello", " " , $name;
			}
		}
		Helloworld();  
 
		// for enter value in the home page by (?name=SULIMAN)
		/*echo "HELLO "; 
		echo $_GET['name']; */
		?>



	
		
	

</body>
</html>

