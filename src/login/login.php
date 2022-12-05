<?php
  require "../componentes/header.php";
?>

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
        <form class="sign-up-form">
          <div class="user-data">
            <div class="login-title">
              <p>Faca login para enfrentar outros players!</p>
            </div>
            <div class="username-password-container">
              <input id="userName" class="login-input" placeholder="Usuário">
              <input
                id="password"
                class="login-input"
                type="password"
                placeholder="Senha"
              >
              <a class="login-button-container" onclick="validateLoginInput()">
                Entrar no jogo
              </a>
            </div>
            <p id="both-inputs-invalid" style="display:none">Insira Usuário e Senha para logar!</p>
          </div>
          <div class="sign-up-option-container">
            <a class="sign-up-option-button" href="./../sign-up/sign_up.html">
              Quero me cadastrar
            </a>
          </div>
        </form>
      </section>
    </main>

<?php
  require "../componentes/footer.php";
?>