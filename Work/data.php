<!DOCTYPE html>
<html>
<body>
<?php

require_once "include.php";
require_once "formPHP.html";




 if(isset($_POST["name"]))
 {		$name=$_POST["name"];
		$surname=$_POST["surname"];
	 
		if(mb_strlen($name)>=3 && mb_strlen($surname)>=3) 
		{
			echo"It's OK!</br>";
		}
		else 
		{
			echo "It's not OK. You have to retype again</br>";
		}

 }
?>

</body>
</html>
