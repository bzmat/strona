<!DOCTYPE html>
<?php
require 'db_conn.php';


if(!empty($_POST['login']) && !emoty($_POST['pass'])){
  $sql = "INSERT INTO user()"
}

endif;

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" typ="text/css" href="style.css">
  </head>
  <body>
    <div class="header">
      <a href="index.php">Go back</a>
    </div>
      <h1>Register</h1>
      <span><a href="login.php">or login here</a></span>
      <form action="register.php" method="POST">
        <input type="text" placeholder="Enter your email" name="login">
        <input type="password" placeholder=" and password" name="pass">
        <input type="password" placeholder=" confirm password" name="conf-pass">
        <input type="submit" value="Save">
  </body>
</html>
