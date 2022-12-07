<?php
$hostname = 'localhost';
$database = 'meowmoria_game';
$user = 'root';
$password = '';
$port = '3307';

try {
  $dbConnection = new PDO("mysql:host=$hostname;port=$port", $user, $password);
  $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
  echo "Connection failed: " . $exception->getMessage();
}

$createGameDatabase = "CREATE DATABASE IF NOT EXISTS $database";
$dbConnection->exec($createGameDatabase);
$dbConnection->exec("USE $database");

$userTable = "CREATE TABLE IF NOT EXISTS user(
  id INT NOT NULL AUTO_INCREMENT,
  user_full_name VARCHAR(100) NOT NULL,
  cpf VARCHAR(15) NOT NULL,
  birthday DATE NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  nickname VARCHAR(50) NOT NULL,
  user_password VARCHAR(255) NOT NULL,
  PRIMARY KEY(id)
)";
$dbConnection->exec($userTable);

$gameResultsTable = "CREATE TABLE IF NOT EXISTS game_results(
  id INT NOT NULL AUTO_INCREMENT,
  player_id  INT NOT NULL,
  game_time FLOAT NOT NULL,
  game_mode TEXT NOT NULL,
  attempts INT NOT NULL,
  board_size INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(player_id) REFERENCES user(id)
)";
$dbConnection->exec($gameResultsTable);
?>