<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'auth';

  try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  } catch (Exception $e) {
    die("Connection failed: ". $e->getMessage());
  }
 ?>
