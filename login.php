<?php
session_start();
  if(isset($_SESSION['user_id'])){
    header("Location: index.php");
  }
  require 'db_conn.php';



  if(!empty($_POST['login']) && !empty($_POST['pass'])){
    $records = $conn->prepare("SELECT id, login, password FROM users WHERE login = :login");
    $records->bindParam(':login', $_POST['login']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

      $message = '';

    if(count($results) > 0 && password_verify($_POST['pass'], $results['password'])){
      $_SESSION['user_id'] = $results['id'];
      header("Location: index.php");
    }else{
      $message = 'Przepraszamy login i hasło nie pasują. Spróbuj jeszcze raz';
    }

  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <a href="index.php">Powrót do strony głównej</a>
    </div>
    <?php
    if(!empty($message)){
      echo '<p>'.$message.'</p>';
    }
     ?>
        <h1>Logowanie</h1>
        <form method="POST" action="login.php" >
          <input type="text" placeholder="Podaj login" name="login">
          <input type="password" placeholder="Podaj swoje hasło" name="pass">
          <input type="submit" value="Zaloguj">
        </form>

  </body>
</html>
