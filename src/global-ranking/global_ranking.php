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
        <div id="table-ranking" class="table-ranking">
          <div class="item-table-ranking">
            <div class="trophy-table-ranking">
              <img class="first-place-trophy" src="../assets/icons/trophy.svg" alt="Troféu Primeiro Lugar">
            </div>
            <div class="position-table-ranking">1</div>
            <div class="player-name-table-ranking">Jogador 1</div>
            <div class="game-mode-table-ranking">Clássico 2x2</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">01/01/2022 11:11</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 1:11
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 11
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking">
              <img class="second-place-trophy" src="../assets/icons/trophy.svg" alt="Troféu Segundo Lugar">
            </div>
            <div class="position-table-ranking">2</div>
            <div class="player-name-table-ranking">Jogador 2</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking">
              <img class="third-place-trophy" src="../assets/icons/trophy.svg" alt="Troféu Terceiro Lugar">
            </div>
            <div class="position-table-ranking">3</div>
            <div class="player-name-table-ranking">Jogador 3</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking"></div>
            <div class="position-table-ranking">4</div>
            <div class="player-name-table-ranking">Jogador 4</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking"></div>
            <div class="position-table-ranking">5</div>
            <div class="player-name-table-ranking">Jogador 5</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking"></div>
            <div class="position-table-ranking">6</div>
            <div class="player-name-table-ranking">Jogador 6</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking"></div>
            <div class="position-table-ranking">7</div>
            <div class="player-name-table-ranking">Jogador 7</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking"></div>
            <div class="position-table-ranking">8</div>
            <div class="player-name-table-ranking">Jogador 8</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking"></div>
            <div class="position-table-ranking">9</div>
            <div class="player-name-table-ranking">Jogador 9</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
          <div class="item-table-ranking">
            <div class="trophy-table-ranking"></div>
            <div class="position-table-ranking">10</div>
            <div class="player-name-table-ranking">Jogador 10</div>
            <div class="game-mode-table-ranking">Clássico 3x3</div>
            <div class="match-details-table-ranking">
              <div class="date-table-ranking">02/02/2022 22:22</div>
              <div class="plays-duration-table-ranking">
                <div>
                  <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> 2:22
                </div>
                <div>
                  <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> 22
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="subtitle-table-ranking">
          <div class="subtitle-table-ranking-item">
            <img src="../assets/icons/clock.svg" height="18" alt="Tempo da partida"> tempo da
            partida
          </div>
          <div class="subtitle-table-ranking-item">
            <img src="../assets/icons/play.svg" height="18" alt="Número de jogadas"> número de
            jogadas
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
