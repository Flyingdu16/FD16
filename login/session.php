<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="pub";

$link = mysql_connect($servername, $username, $password) or die('Cant connect');
mysql_select_db($dbname);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("SELECT username FROM users WHERE username='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: LoginUserface.php'); // Redirecting To Home Page
}
?>