<!DOCTYPE html>
<html>

<head>
<title>PHP Colourful Numbers </title>
</head>

<body>

	<?php
		for($i=0; $i <= 100; $i++)
		{	
		if($i==0) echo '<p style="background-color:#FF7F50"> "!!!!!First number is 0, so the background colour is different!!!!!";</p>';
		else if($i%7==0) 
			 if($i%2==0) 
				echo  '<p style="background-color:#0000FF"> "Bingo!"</p>';
			 else
				echo	'<p style="background-color:#7FFF00"> "Bingo!"</p>';
		else if($i%2==0) 
			echo  "<p style='background-color:#0000FF'>$i</p>";
		else
			echo "<p style='background-color:#7FFF00'>$i</p>"; 
		
		}	
	?>



</body>
</html>