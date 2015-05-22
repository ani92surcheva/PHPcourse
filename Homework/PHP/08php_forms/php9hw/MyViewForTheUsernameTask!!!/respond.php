<!DOCTYPE html>
<html>
<body>
<?php

require_once "request.php";


 if(isset($_POST["user_name"])&&isset($_POST["p_password"])&&isset($_POST["n_password"])&&isset($_POST["n_password_again"]))
				{$user_name=$_POST["user_name"];
				$p_password=$_POST["p_password"];
				$n_password=$_POST["n_password"];
				$n_password_again=$_POST["n_password_again"];
				if(mb_strlen($user_name)<3)
					{echo "<div style='background-color:#FF0033'> Enter user name more than 3 symbols! Retype!</br></div>";	}
				else if (mb_strlen($p_password)<8 || mb_strlen($n_password)<8 || mb_strlen($n_password)<8)
					{echo "<div style='background-color:#FF0033'> Your password is too short! Retype!</br></div>";}
				else if($p_password==$user_name ||	$n_password==$p_password ||	$n_password==$user_name )
					{echo "<div style='background-color:#FF0033'> Your password is incorrect! Retype!</br></div>";}
				else if($n_password!=$n_password_again) 
						{
						echo "<div style='background-color:#FF0033'>It's not OK. You have to retype again! </br></div>";
						}
						else 
						{
						echo "<div style='background-color:#CCFF66'> Everything is correct! You changed your password!</br></div>";
						}

				}
				else {echo "<div style='background-color:#990000'> You have blank spaces. Please fill them!</br></div>";}
?>

</body>
</html>