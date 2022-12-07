<?php
session_start();

require_once "../utils.php";

verify_exists_session();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Meu perfil</title>
    <link rel="icon" href="./../assets/icons/favicon.png">
    <link rel="stylesheet" href="./../reset.css">
    <link rel="stylesheet" href="profile.css">
  </head>

  <body>
    <?php require_once "../components/back_header.php" ?>
    <main>
      <section>
        <h1>Meu perfil</h1>
        <form id="profile-form">
          <div class="profile-form">
            <div class="name-container">
              <label for="user_full_name">Nome completo:</label>
              <input
                class="default-input"
                type="text"
                id="user_full_name"
                name="user_full_name"
                required
              >
            </div>
            <div class="document-birthday-container">
              <div class="document-container">
                <label for="cpf">CPF:</label>
                <input
                  class="default-input disabled-input"
                  type="text"
                  id="cpf"
                  name="cpf"
                  size="30"
                  readonly
                >
              </div>
              <div class="birthday-container">
                <label for="birthday">Data de nascimento</label>
                <input
                  class="default-input disabled-input"
                  type="date"
                  id="birthday"
                  name="birthday"
                  readonly
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
                  class="default-input disabled-input"
                  type="text"
                  id="nickname"
                  name="nickname"
                  size="35"
                  readonly
                  placeholder="Seu apelido no jogo"
                >
                <label for="user_password"></label>
                <input
                  class="default-input"
                  type="password"
                  id="user_password"
                  name="user_password"
                  required
                  placeholder="Sua senha"
                >
              </div>
            </div>
            <div class="input-alerts">
              Os campos que estao marcados em cinza nao podem ser alterados
            </div>
            <div class="action-buttons">
              <button class="default-button update-button" type="submit">
                Atualizar
              </button>
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

    <script src="./profile.js"></script>
  </body>
</html>
