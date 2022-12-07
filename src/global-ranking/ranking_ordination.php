<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
session_start();

require("./../database.php");

$standard_ranking = $dbConnection->prepare("SELECT u.nickname, g.game_time, g.game_mode, g.score, g.attempts, g.table_size 
        FROM user u INNER JOIN game_results g 
        ON u.id = g.id
        WHERE g.game_mode = 'standard'
        ORDER BY g.score
        ");

$against_time_ranking = $dbConnection->prepare("SELECT u.nickname, g.game_time, g.game_mode, g.attempts, g.table_size 
        FROM user u INNER JOIN game_results g 
        ON u.id = g.id
        WHERE g.game_mode = 'against_time'
        ORDER BY g.score
        ");

if(($dbConnection->query($standard_ranking)->num_rows > 0)) {
    while($row = $result->fetch_assoc()) {

    }
}

?>