<?php
  $hostname = 'localhost';
  $dataBaseName = 'meowmoria_game';
  $user = 'root';
  $password = '';

  try {
    $dbConnection = new PDO("mysql:host=$hostname", $user, $password);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage();
  }

  $createGameDatabase = "CREATE DATABASE IF NOT EXISTS meowmoria_game";
  $dbConnection->exec($createGameDatabase);
  $dbConnection->exec("USE meowmoria_game");

  $userTable = "CREATE TABLE IF NOT EXISTS user(
    id INT NOT NULL AUTO_INCREMENT,
    user_full_name VARCHAR(100) NOT NULL,
    cpf VARCHAR(15) NOT NULL,
    birthday DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    nickname VARCHAR(50) NOT NULL,
    user_password VARCHAR(30) NOT NULL,
    PRIMARY KEY(id)
  )";
  $dbConnection->exec($userTable);

  $gameResultsTable = "CREATE TABLE IF NOT EXISTS game_results(
    id INT NOT NULL AUTO_INCREMENT,
    player_id  INT NOT NULL,
    game_time TIME NOT NULL,
    game_mode TEXT NOT NULL,
    score INT NOT NULL,
    attempts INT, 
    table_size TEXT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(player_id) REFERENCES user(id)
  )";
  $dbConnection->exec($gameResultsTable);
?>