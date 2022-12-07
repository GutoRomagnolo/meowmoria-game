<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Ranking Global</title>
    <link rel="icon" href="./../assets/icons/favicon.png">
    <link rel="stylesheet" href="./../reset.css">
    <link rel="stylesheet" href="global_ranking.css">

    <script src="./global_ranking.js"></script>
  </head>

  <body>
    <?php require_once "../components/back_header.php" ?>
    
    <main>
      <section>
        <h1>RANKING GLOBAL</h1>
        <div class="action-buttons">
          <button class="default-button" 
            id="standard-ranking-button" 
            type="submit" 
            onclick="selectRankingClassic()"
          >
            Clássico
          </button>
          <button class="default-button" id="against-time-ranking-button" type="submit" onclick="selectRankingAgainstTime()">
            Contra o Tempo
          </button>
        </div>
        <div id="table-ranking" class="table-ranking"></div>
        <div class="subtitle-table-ranking">
          <div class="subtitle-table-ranking-item">
            <img src="../assets/icons/clock.svg" height="18" alt="Tempo da partida"> tempo da partida
          </div>
          <div class="subtitle-table-ranking-item">
            <img src="../assets/icons/play.svg" height="18" alt="Número de jogadas"> número de jogadas
          </div>
        </div>
      </section>
    </main>

    <footer>
      <p>Autores:</p>
      <p>
        Carolina Noda, Gustavo Romagnolo, Marcos Medeiros, Mariana Araujo e
        Thamires Prado
      </p>
    </footer>
  </body>
</html>
