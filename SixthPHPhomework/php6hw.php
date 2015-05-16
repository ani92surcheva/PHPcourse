<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<dl>

<?php


    $array = array(
		
        'VMWare' => 'http://www.vmware.com/',
        'HP'=>'http://www8.hp.com/bg/bg/home.html',
		'Ipsos'=>'http://www.ipsos.com/',
		'MusalaSoft'=>'http://www.musala.com/bg/',
		'OrderDynamics'=>'http://www.orderdynamics.com/'
    );
	
echo "</br> Companies with websites, if you want to go to the website, click on the companie's name :</br>";
	 foreach ($array as $key => $value) {
		//echo "<tr>";		
       // echo "<td><strong>" . $key . "</strong></td>";
		//echo"</br>";
       // echo "<td><a href=" . $value . "/a></td>";		
		//echo "</tr>";

echo "$key   <a href=$value/a>";
echo"</br>";

		}

    
?>
</table>

</dl>

</body>
</html>
