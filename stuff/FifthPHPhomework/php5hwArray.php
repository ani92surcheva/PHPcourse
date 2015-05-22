<!DOCTYPE html>
<html>
<head lang="en">
<style>
p {
    text-indent: 50px;
	font-size:20px;
    font-family:"Fantasy";
	font-style:oblique;
}
</style>
    <meta charset="UTF-8">
    <title> Car Task</title>
</head>
<body>
<?php
	$arrayCars = array("BMW","Audi","Chevrolet","Mercedes","Volkswagen","Rover");
	for($i=0;$i<count($arrayCars);$i++)
		echo "<p> I want to buy $arrayCars[$i]</p>";
	
	unset($arrayCars[count($arrayCars)-1]);
	
	echo "</br> After deleting the last brand:";
	for($i=0;$i<count($arrayCars);$i++)
		echo "<p> I will buy $arrayCars[$i]</p>";
?>
</body>
</html>