<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login</title>

    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

<div class="hej">
<h1>Flying Dutchman</h1>
</div>
</head>

<body>

  
  <?php include 'Login.php';?>
  <div class="login-wrap">
  <h2>Login</h2>

  <div class="form">
    <form method="post" action="LoginUserface.php">
    <input name ="user" type="text" placeholder="Username"/>
    <input type="password" placeholder="Password" name="password" />
    <button type="submit"> Sign in </button>
  </form>
  </div>
</div>


</body>

</html>