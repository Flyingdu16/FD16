<?php

$servername="localhost";
$username="root";
$password="root";
$dbname="pub";

$link = mysql_connect($servername, $username, $password) or die('Cant connect');
mysql_select_db($dbname);

?>