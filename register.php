<?php
session_start();
  if(isset($_SESSION['user_id'])){
    header("Location: index.php");
}
  require 'db_conn.php';

    $message = '';

  if(!empty($_POST['login']) && !empty($_POST['pass'])){



    $sql = "INSERT INTO users(login, password, email) VALUES (:login, :password, :email)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':login', $_POST['login']);
    $stmt->bindParam(':password', password_hash( $_POST['pass'], PASSWORD_BCRYPT));
    $stmt->bindParam(':email', $_POST['email']);

    if($stmt->execute()){
      $message = "Rejestracja zakończona sukcesem";
    }else{
      $message = "Wystąpił problem z rejestarcją. Spróbuj za chwile";
    }


}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>rejestarcja</title>
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
          <h1>Rejestarcja</h1>
        <form method="POST" action="register.php" >
          <input type="text" placeholder="Podaj login" name="login">
          <input type="password" placeholder="Podaj swoje hasło" name="pass">
          <input type="text" placeholder="Podaj adres email" name="email">
          <input type="submit" value="Zapisz">
        </form>
  </body>
</html>
