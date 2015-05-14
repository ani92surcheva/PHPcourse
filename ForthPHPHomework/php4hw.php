<!DOCTYPE html>
<html>
<body>
<head>
<title>PHP Table Numbers </title>
<style>
table, tr, td {
    border: 1px solid black;
}
</style>
</head>


<body>

	<?php
		define("COLS", 4);
		define("ROWS", 5);
		echo "</br> Table with positive indexes, which begin with 1 and end with 5 </br>";
		echo "</br><table >";
		for($i=1; $i <= COLS; $i++)
		{ 	echo "<tr>";
			for($j=1; $j<=ROWS; $j++)
			{ 				
				echo "<td>$i,$j</td>";
			}
			echo "</tr>";
		}	
		echo "</table>";		
		
		echo"</br></br></br></br></br></br></br></br>";
		echo "</br> Table with standart indexes, which begin with 0 and end with 4 </br>";
		echo "</br><table >";
		for($i=0; $i <COLS; $i++)
		{ 	echo "<tr>";
			for($j=0; $j<ROWS; $j++)
			{ 				
				echo "<td>$i,$j</td>";
			}
			echo "</tr>";
		}	
		echo "</table>";		
	?>



</body>
</html>