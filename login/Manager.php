<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Manager</title>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome  <i><?php echo $_SESSION["name"]; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>