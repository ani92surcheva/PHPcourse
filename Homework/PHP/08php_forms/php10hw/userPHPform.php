<!DOCTYPE html>
<html>
<head>
<title> Form User </title>
<style>

div {
	background-color: #660066;
	font-family: "Times New Roman";
    font-size: 20px;
	width: 320px;
    padding: 10px;
    border: 1px solid black;
    margin: 0; 
} 
</style>
</head>
<body background="background.jpg">
<form method="post">
	<div>
		<span> User name: </span>
		<br>
		<input type="text" name="user"/>
	</div>
	<div>
		<span> Enter Password: </span>
		<br>
		<input type="password" name="password"/>
	</div>
	<div>
		<span> Retype Password: </span>
		<br>
		<input type="password" name="password_again"/>
	</div>
	<div>
		<span> Secret Question: </span>
		<br>
		<select name="question">
		<option value="place">Which is your birth place?</option>
		<option value="car">Which brand was your first car?</option>
		<option value="brand">Which is your favourite brand of clothes?</option>
		<option value="mom">What is your mother's name?</option>
		</select>
	</div>
	<div>
		<span> Secret Answer: </span>
		<br>
		<input type="text" name="answer"/>
	</div>
	<div>
		<span> E-mail: </span>
		<br>
		<input type="text" name="email"/>
	</div>
	<div>
		<span> Name: </span>
		<br>
		<input type="text" name="name"/>
	</div>
	<div>
		<span> Surname: </span>
		<br>
		<input type="text" name="surname"/>
	</div>
	<div>
		<span> Gender: </span>
		<br>
		<input type="radio" name="sex" value="male" checked>Male
		<br>
		<input type="radio" name="sex" value="female">Female
		<br>
		<input type="radio" name="sex" value="dk">I don't know
		<br>
	</div>
	<div>
		<span> Date of Birth: </span>
		<br>
		<input type="text" name="date"/>
	</div>
	

	<div>
		<input type="submit" value="Create Account"/>
	</div>
</form>
<?php

$i=0;
if(isset($_POST["user"])&&isset($_POST["password"])&&isset($_POST["password_again"])&&isset($_POST["answer"])&&isset($_POST["email"])&&isset($_POST["name"])&&isset($_POST["surname"])&&isset($_POST["sex"])&&isset($_POST["date"]))
{
	$user=$_POST["user"];
	$password=$_POST["password"];
	$password_again=$_POST["password_again"];
	//$question=$_POST["question"];
	$answer=$_POST["answer"];
	$email=$_POST["email"];
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$sex=$_POST["sex"];
	$date=$_POST["date"];
	$findme   = '@';
	$pos = strpos($email, $findme);
	if(mb_strlen($user)<2 || mb_strlen($name)<2|| mb_strlen( $surname)<2)
		{echo "<div style='background-color:#990000'> Enter user name/name/surname more than 3 symbols! Retype!</br></div>"; $i++;	}
	if(mb_strlen($password)<3 || mb_strlen($password_again)<3 || $password_again!=$password || $password_again==$user ||$password_again==$name || $password_again==$surname)
		{echo "<div style='background-color:#990000'> Incorrect password! Retype!</br></div>";$i++;	}
	if(mb_strlen($email)<5 ||  $pos===false)
		{echo "<div style='background-color:#990000'> Incorrect email! Retype!</br></div>";	$i++;}
	if(mb_strlen($date)<5)
		{echo "<div style='background-color:#990000'> Incorrect date! Retype!</br></div>";	$i++;}
	if($answer==$password || $answer==$password_again)
		{echo "<div style='background-color:#990000'> Your secret answer have to be different of the password!</br></div>";	$i++;}
	if($i==0)	{echo "<div style='background-color:#00FFCC'> Everything is correct! You created your new account!</br></div>";	}
}
else {echo "<div style='background-color:#990000'> You have blank spaces. Please fill them!</br></div>";}
?>

</body>
</html>