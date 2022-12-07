<?php require_once "../utils.php"; ?>
<header class="main-header">
  <nav class="left-navigation">
    <a href="<?=$url_app?>/log_out/log_out.php" class="navigation-option"> 
      <img
        src="./../assets/icons/logoff.svg"
        class="logoff-icon"
        alt="Sair do jogo"
      >
      <p>Sair da conta</p>
    </a>
  </nav>
  <nav class="right-navigation">
    <a href="<?=$url_app?>/global-ranking/global_ranking.php" class="navigation-option">
      <img
        src="./../assets/icons/ranking.svg"
        class="header-nav-icons"
        alt="Ranking global"
      >
      <p>Ranking Global</p>
    </a>
    <a href="<?=$url_app?>/profile/profile.php" class="navigation-option">
      <img
        src="./../assets/icons/user.svg"
        class="header-nav-icons"
        alt="Meu perfil"
      >
      <p>Meu perfil</p>
    </a>
  </nav>
</header>