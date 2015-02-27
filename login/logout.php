<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: LoginUserface.php"); // Redirecting To Home Page
}
?>