<!DOCTYPE html>
<html>
<body>
<head>
<style>
div{
	width: 200px;
    height: 200px;
	//background-color:'(<?php echo $color_number; ?>');
	border: 25px solid navy;
	}
</style>

<title>PHP second homework </title>
</head>
<body>

	<?php
		$color_number = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
		echo $color_number;
	?>

<div style="background-color:<?php echo $color_number; ?>;">
	<p> This background colour will be different each time. </p>
</div>

</body>
</html>