<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
session_start();

require("./../database.php");

$gameResultJSON = file_get_contents('php://input');
$mappedGameResult = json_decode($gameResultJSON);

$gameTime = $mappedGameResult->gameTime;
$gameMode = $mappedGameResult->gameMode;
$attempts = $mappedGameResult->flipsMade;
$boardSize = $mappedGameResult->boardSize;
$playerId = $_SESSION["userId"];

$insertGameResult = "INSERT INTO game_results(
  player_id,
  game_time,
  game_mode,
  attempts,
  board_size
  ) VALUES (
    '$playerId',
    '$gameTime',
    '$gameMode',
    '$attempts',
    '$boardSize'
  )
";

if ($dbConnection->query($insertGameResult)) {
  echo 'successfully_register_match';
} else {
  echo 'register_match_error';
}

$dbConnection = null;

exit();
?>