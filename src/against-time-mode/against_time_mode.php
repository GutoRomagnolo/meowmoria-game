<?php
session_start();

require_once "../utils.php";

verify_exists_session();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Jogo da memória - Contra o tempo</title>
    <link rel="icon" href="./../assets/icons/favicon.png">
    <link rel="stylesheet" href="./../reset.css">
    <link rel="stylesheet" href="./../standard-mode/standard_mode.css">
    <link rel="stylesheet" href="./../against-time-mode/against_time_mode.css">
    <link rel="stylesheet" href="./../game-result/game_result.css">
  </head>

  <body>
    <?php require_once "../components/back_header.php" ?>
    
    <main id="general-container" class="general-container">
      <section class="lateral-menu">
        <div class="game-time">
          <h1>Tempo da partida:</h1>
          <p class="timer" id="timer">00:00</p>
        </div>
        <div class="game-specifications">
          <div class="game-mode-container">
            <p>Modalidade:</p>
            <p class="input-specification mode-title">Contra o tempo</p>
          </div>
          <div class="board-size-container">
            <p>Tabuleiro:</p>
            <p id="board-size" class="input-specification"></p>
          </div>
        </div>
        <div class="plays-counter-container">
          <p class="counter-title">Jogadas feitas:</p>
          <div id="moves-made" class="counter-quantity">
          </div>
        </div>
        <div class="cheat-mode-container">
          <div class="cheat-button" onclick='activateCheatMode("cheat-mode-id")'>
            <img
              id="cheat-mode-id"
              src="./../assets/icons/cheat-off.svg"
              class="cheat-mode-icon"
              alt="Sair do jogo"
            >
            <p id="cheat-mode-text">Ativar modo trapaca</p>
          </div>
        </div>
      </section>
      <div id="middle-container" class="middle-container">
        <div class="board-container" id="board-container">
          <div id="board-place" class="board-place">
          </div>
        </div>
        <section class="ranking-container">
          <header class="ranking-header">
            <h1>Seu histórico de partidas</h1>
            <hr class="horizontal-line">
          </header>
          <div id="table-ranking"></div>
        </section>
      </div>
    </main>
    <script src="./../game-result/game_result.js"></script>
    <script src="./../standard-mode/standard_mode.js"></script>
    <script src="./../standard-mode/count_down.js"></script>
    <script>getDataRanking('against_time');</script>
  </body>
</html>
