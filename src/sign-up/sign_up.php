<?php
session_start();

require_once "../utils.php";

avoid_start_session();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="icon" href="./../assets/icons/favicon.png">
    <link rel="stylesheet" href="./../reset.css">
    <link rel="stylesheet" href="sign_up.css">
  </head>

  <body>
    <?php require_once "../components/back_header.php" ?>
    <main>
      <section>
        <h1>Cadastro</h1>
        <p>
          Insira seus dados abaixo para criar sua<br>
          conta e comecar a jogar.
        </p>
        <form id="sign-up-form">
          <div class="sign-up-form">
            <div class="name-container">
              <label for="user-full-name">Nome completo:</label>
              <input
                class="default-input"
                type="text"
                id="user-full-name"
                name="user_full_name"
                required
              >
            </div>
            <div class="document-birthday-container">
              <div class="document-container">
                <label for="cpf">CPF:</label>
                <input
                  class="default-input"
                  type="text"
                  id="cpf"
                  name="cpf"
                  size="30"
                  required
                >
              </div>
              <div class="birthday-container">
                <label for="birthday">Data de nascimento</label>
                <input
                  class="default-input"
                  type="date"
                  id="birthday"
                  name="birthday"
                  required
                >
              </div>
            </div>
            <div class="phone-email-container">
              <div class="email-container">
                <label for="email">E-mail:</label>
                <input
                  class="default-input"
                  type="email"
                  id="email"
                  name="email"
                  size="25"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                  required
                >
              </div>
              <div class="phone-container">
                <label for="phone">Telefone:</label>
                <input
                  class="default-input"
                  type="tel"
                  id="phone"
                  name="phone"
                  size="15"
                  required
                >
              </div>
            </div>
            <div class="userName">
              <div class="square-picture">
                <img
                  src="./../assets/icons/profile-picture.svg"
                  class="avatar"
                  alt="Imagem de perfil"
                >
              </div>
              <div class="name-password-container">
                <label for="nickname"></label>
                <input
                  class="default-input"
                  type="text"
                  id="nickname"
                  name="nickname"
                  size="35"
                  required
                  placeholder="Seu apelido no jogo"
                >
                <label for="password"></label>
                <input
                  class="default-input"
                  type="password"
                  id="password"
                  name="user_password"
                  required
                  placeholder="Sua senha"
                >
              </div>
            </div>
            <div class="action-buttons">
              <input
                class="default-button sign-up-option-button"
                type="submit"
                value="Quero me cadastrar"
              >
            </div>
          </div>
        </form>
      </section>
    </main>

    <footer>
        <p>Autores:</p>
        <p>
          Carolina Noda, Gustavo Romagnolo, Marcos Medeiros, Mariana Araujo e
          Thamires Prado
        </p>
    </footer>
  <script src="./sign_up.js"></script>
  </body>
</html>
