const signUpForm = document.getElementById('sign-up-form');

signUpForm.addEventListener('submit', async event => {
  event.preventDefault();
  try {
    const response = await fetch('sign_up_user.php', {
      method: 'POST',
      body: new FormData(signUpForm)
    });

    const resultText = await response.text()

    if(resultText === 'same_cpf_sign_up'){
      alert('Esse CPF já está cadastrado.')
    } else if (resultText === 'successfully_sign_up') {
      alert('Usuário cadastrado!')
    }

    alert('Usuário cadastrado com sucesso!')
  } catch(error) {
    console.log("Ocorreu um erro ao cadastrar o usuário: ", error);
  }
})