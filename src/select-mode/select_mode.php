<?php
session_start();

require_once "../utils.php";

verify_exists_session();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Modo de Jogo</title>
    <link rel="icon" href="./../assets/icons/favicon.png">
    <link rel="stylesheet" href="./../reset.css">
    <link rel="stylesheet" href="./select_mode.css">
    <script src="./select_mode.js"></script>
  </head>

  <body>
    <?php require_once "../components/main_header.php" ?>
    <section class="main-container">
      <h1>Selecione o modo de jogo</h1>

      <div class="cards">
        <div id="standard-card" onclick="selectStandardMode()">
          <img
            src="./../assets/icons/people.svg"
            class="image-card"
            alt="standard-people">
          <p class="card-title">Classico</p>
          <p>
            O número de pontos acumulado por um jogador corresponde ao total de
            jogadas necessárias até que todo o tabuleiro tenha sido revelado
            (quanto menor, melhor).
          </p>
        </div>

        <div id="against-time-card" onclick="selectAgainstTimeMode()">
          <img
            src="./../assets/icons/people-running.svg"
            class="image-card"
            alt="against-time-people"
          >
          <p class="card-title">Contra o tempo</p>
          <p>
            Muito similar ao clássico, com a adicao de um contador. você deve
            descobrir todos os pares antes que o contador chegue a zero para nao
            ser derrotado!
          </p>
        </div>
      </div>

      <div class="board-container">
        <p class="selector-text">Tamanho do Tabuleiro:</p>
        <select id="board-selector">
          <option value="4x4">4x4</option>
          <option value="6x6">6x6</option>
          <option value="8x8">8x8</option>
        </select>
      </div>

      <div class="submit-button-container">
        <input type="submit" value="Jogar" class="submit" onclick="startGame()">
        <p id="erro" style="visibility:hidden">Por favor, selecione um modo de jogo</p>
      </div>
    </section>

    <footer>
      <p>Autores:</p>
      <p>
        Carolina Noda, Gustavo Romagnolo, Marcos Medeiros, Mariana Araujo e
        Thamires Prado
      </p>
    </footer>
  </body>
</html>
