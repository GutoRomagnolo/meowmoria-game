<?php
  $hostname = 'localhost';
  $dataBaseName = 'dream-team-memory-game';
  $user = 'root';
  $password = '';

  try {
    $dbConnection = new PDO('mysql:host=$hostname;dbname=$dataBaseName', $user, $password);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage();
  }

  $game_results_table = "CREATE TABLE IF NOT EXISTS game_results(
    id INT NOT NULL AUTO_INCREMENT,
    player_id  INT NOT NULL,
    game_time TIME NOT NULL,
    game_mode TEXT NOT NULL,
    score INT NOT NULL,
    attempts INT,
    table_size TEXT NOT NULL,
    PRIMARY KEY(id)
  ";

  $dbConnection->exec($game_results_table);

  $user_table = "CREATE TABLE IF NOT EXISTS user(
    id INT NOT NULL AUTO_INCREMENT,
    player_id  INT NOT NULL,
    user_full_name VARCHAR(100) NOT NULL,
    cpf INT NOT NULL,
    birthday DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT NOT NULL,
    nickname VARCHAR(50) NOT NULL,
    user_password VARCHAR(30) NOT NULL,
    PRIMARY KEY(id)
  ";

  $dbConnection->exec($user_table);




?>