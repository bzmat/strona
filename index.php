<?php
session_start();

require 'db_conn.php';

  if(isset($_SESSION['user_id'])){
    $records = $conn->prepare("SELECT id, login, password FROM users WHERE id = :id");
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if(count($results) > 0){
      $user = $results;
        }
  }


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Witaj na naszej stronie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <?php
        if(!empty($user)){
          echo '<div class="header">
            <h1>Witaj '.$user['login'].'<br> Logowanie zakończone sukcesem</h1>
              </div>';
          echo '<a href="logout.php">Wyloguj się</a>';


        }else{
          echo '<div class="header">
            <h1>Witaj na naszej stronie</h1>
            <a href="login.php">Zaloguj </a> lub <a href="register.php">Zarejestruj się</a>
          </div>';
        }
       ?>

    </div>

  </body>
</html>
