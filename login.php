<!DOCTYPE html>
<?php
  if(!empty($_POST['login']) && !emoty($_POST['pass'])):

  endif;

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" typ="text/css" href="style.css">
  </head>
  <body>
    <div class="header">
      <a href="index.php">Go back</a>
    </div>
    <h1>Login</h1>
    <span><a href="register.php">or register here</a></span>
    <form action="login.php" method="POST">
      <input type="text" placeholder="Enter your email" name="login">
      <input type="password" placeholder=" and password" name="pass">
      <input type="submit" value="Save">
    </form>
  </body>
</html>
