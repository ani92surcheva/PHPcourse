<!DOCTYPE html>
<html>

<head>
<title>PHP Triangle </title>
</head>

<body>

	<?php
		function printS($a, $ha) {
		$S=($a*$ha)/2;
		echo "</br>" ;
		if($S<10) echo "<div style='color:#006400'> Triangle with a=$a and ha=$ha has S=$S</div></br>";
		if($S>=10 && $S<23) echo "<div style='color:#FF0000'> Triangle with a=$a and ha=$ha has S=$S</div></br>";
		if($S>=23) echo "<div style='color:#483D8B'> Triangle with a=$a and ha=$ha has S=$S</div></br>";
	}
	 
    for($i=0;$i<10;$i++)
	{ $a=rand(0,20);
	 $ha=rand(0,20);
	 printS($a,$ha);
	}
?>

</body>
</html>