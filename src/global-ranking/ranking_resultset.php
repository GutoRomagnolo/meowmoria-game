<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
session_start();

require("./../database.php");

$gameMode = $_GET["gameMode"] ?? "standard";
$userId = $_SESSION["userId"] ?? "";
$historic = $_GET["historic"] ?? "";

try {
  if ($historic) {
    $query = "
      SELECT
        u.nickname,
        g.game_time,
        g.game_mode,
        g.attempts,
        g.board_size
      FROM
        user AS u
      INNER JOIN
        game_results AS g ON g.player_id = u.id
      WHERE
        g.game_mode = '$gameMode'
        AND u.id = $userId
      ORDER BY
        g.attempts ASC
    ";
  } else {
    $query = "
      SELECT
        u.nickname,
        g.game_time,
        g.game_mode,
        g.attempts,
        g.board_size
      FROM
        user AS u
      INNER JOIN
        game_results AS g ON g.player_id = u.id
      WHERE
        g.game_mode = '$gameMode'
        AND g.game_time > 0
      ORDER BY
        g.attempts ASC
    ";
  }
  
  $sql = $dbConnection->query($query);
  $results = $sql->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($results);
} catch(PDOException $exception) {
  echo "Error on request data: " . $exception->getMessage();
}

?>