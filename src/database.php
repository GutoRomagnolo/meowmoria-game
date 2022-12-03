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

  // $dbConnection = new mysqli($hostname, $dataBaseName, $user, $password);
  // $sql = "CREATE TABLE IF NOT EXISTS game_results(
  //   id INT NOT NULL AUTO_INCREMENT,
  //   player_id  INT NOT NULL,
  //   game_time TIME NOT NULL,
  //   game_mode TEXT,
  //   attempts INT
  //   PRIMARY KEY(id)
  // ";
?>