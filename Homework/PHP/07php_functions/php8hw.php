<!DOCTYPE html>
<html>

<head>
<title>PHP Words</title>
</head>

<body>

	<?php
	
		function Words($number, $word) {
		echo "</br> number=$number and word=$word  ";
		if(strlen($word)%2==0) $number=$number+12;
		 else 
			{	$number=$number-3;
				if($number>10)
					{$number=$number-22;
					 if($number<0) 
						$number=$number+14;
					}
			}
		
		echo "-----final number=$number";
	}
	$number=7; 
	$word='happy';
    Words($number,$word);
	$word='lonely';
    Words($number,$word);
	$word='sad';
    Words($number,$word);
	$word='love';
    Words($number,$word);
	$word='family';
    Words($number,$word);
	$word='together';
    Words($number,$word);
	
?>

</body>
</html>