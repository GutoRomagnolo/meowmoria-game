const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit', async event => {
  event.preventDefault();
  try {
    const response = await fetch('user_authentication.php', {
      method: 'POST',
      body: new FormData(loginForm)
    });

    const resultText = await response.text();

    if (resultText === 'successfully_init_session') {
      window.open("./../select-mode/select_mode.php", "_self");
    } else if (resultText === 'user_or_password_incorrect') {
      alert('Seus dados de acesso estão incorretos, digite novamente.');
    }
  } catch(error) {
    console.log("Ocorreu um erro ao realizar o login: ", error);
  }
});

function showMessage () {
  document.getElementById("login-error").style.display = "block";
}