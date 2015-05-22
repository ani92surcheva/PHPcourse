<!DOCTYPE html>
<html>
<head>
<title> Form Password </title>
<style>
body {
    background-color: #660066;
}
div {
	background-color: #33CC99;
	font-family: "Times New Roman";
    font-size: 20px;
	width: 320px;
    padding: 10px;
    border: 1px solid black;
    margin: 0; 
} 
</style>
</head>
<body>
<form method="post">
	<div>
		<span> User name: </span>
		<input type="text" name="user_name"/>
	</div>
	<div>
		<span> Previous Password: </span>
		<input type="password" name="p_password"/>
	</div>
	<div>
		<span> New Password: </span>
		<input type="password" name="n_password"/>
	</div>
	<div>
		<span> Retype New Password: </span>
		<input type="password" name="n_password_again"/>
	</div>
	
	<div>
		<input type="submit" value="Send"/>
	</div>
</form>
<?php

require_once "respond.php";

?>

</body>
</html>