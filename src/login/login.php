<?php
session_start();

require_once "../utils.php";

avoid_start_session();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="./../assets/icons/favicon.png">
    <link rel="stylesheet" href="./../reset.css">
    <link rel="stylesheet" href="login.css">
  </head>

  <body>
    <header class="main-header">
      <img
        src="./../assets/icons/icons-header.svg"
        class="icon-header"
        alt="header"
      >
    </header>
    <main>
      <section class="general-container">
        <h1 class="page-title">MEOWMORIA</h1>
        <p class="page-subtitle">
          Se divirta tentando encontrar gatinhos <br> fofinhos!
        </p>
        <form id="login-form" class="sign-up-form">
          <div class="user-data">
            <div class="login-title">
              <p>Faca login para enfrentar outros players!</p>
            </div>
            <div class="username-password-container">
              <input id="user_name" class="login-input" placeholder="Usuário" name="user_name" required>
              <input
                id="user_password"
                class="login-input"
                type="password"
                placeholder="Senha"
                name="user_password"
                required
              >
              <button type="submit" class="login-button-container">Entrar no jogo</button>
            </div>
            <p id="both-inputs-invalid" style="display:none">Insira Usuário e Senha para logar!</p>
            <p id="login-error" style="display:none">Usuário e/ou senha incorretos</p>
          </div>
          <div class="sign-up-option-container">
            <a class="sign-up-option-button" href="./../sign-up/sign_up.php">
              Quero me cadastrar
            </a>
          </div>
        </form>
      </section>
    </main>
    <?php require_once "../components/footer.php" ?>
    <script src="./login.js"></script>
  </body>
</html>