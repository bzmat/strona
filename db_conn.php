<?php
  $serwer = 'localhost';
  $db_name = 'auth';
  $user = 'root';
  $pass = '';

  try {
    $conn = new PDO("mysql:host=$serwer;dbname=$db_name;", $user, $pass);
  } catch (Exception $e) {
    die("Connection failed: " .$e->getMessage());
  }


 ?>
