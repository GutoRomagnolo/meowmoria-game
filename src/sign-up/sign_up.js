const signUpForm = document.getElementById('sign-up-form');

signUpForm.addEventListener('submit', async event => {
  event.preventDefault();
  try {
    const response = await fetch('sign_up_user.php', {
      method: 'POST',
      body: new FormData(signUpForm)
    });

    const resultText = await response.text()

    alert('Usuário cadastrado com sucesso!')
  } catch(error) {
    console.log("Ocorreu um erro ao cadastrar o usuário: ", error);
  }
})