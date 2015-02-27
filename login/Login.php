<?php

include('connect.php');
/*
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{*/
$user= mysql_real_escape_string($_POST['user']);
$password = md5(mysql_real_escape_string($_POST['password']));

$querry= mysql_query("SELECT * FROM users 
		WHERE username = '$user'
		AND password='$password' ") or die(mysql_error());



$row=mysql_fetch_array($querry);

$name = $row['first_name'];
$credentials =$row['credentials'];
$number= mysql_num_rows($querry);


if($number>0){

	if ($credentials=='0'){
		session_start();
		$_SESSION["name"] = $name;
		header('location: Manager.php');
	}
	else if ($credentials=='3'){
			session_start();
			$_SESSION["name"] = $name;
			header('location: Customer.php');

}
}
	else {
	$error = "Username or Password is invalid";
}
mysql_close($link);
?>
