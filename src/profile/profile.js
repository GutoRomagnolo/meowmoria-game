window.addEventListener('DOMContentLoaded', async event => {
  try {
    const response = await fetch('retrieve_profile_user.php');
    const resultData = await response.text();

    if (resultData === 'you_need_sign_up') {
      alert('Você precisa estar logado para realizar esta operação.');
      return;
    }

    const user = JSON.parse(resultData)[0];

    document.getElementById('user_full_name').value = user.user_full_name;
    document.getElementById('cpf').value = user.cpf;
    document.getElementById('birthday').value = user.birthday;
    document.getElementById('email').value = user.email;
    document.getElementById('phone').value = user.phone;
    document.getElementById('nickname').value = user.nickname;
  } catch(error) {
    console.log("Ocorreu um erro ao cadastrar o usuário: ", error);
  }
});

const profileForm = document.getElementById('profile-form');

profileForm.addEventListener('submit', async event => {
  event.preventDefault();
  try {
    const response = await fetch('edit_profile_user.php', {
      method: 'POST',
      body: new FormData(profileForm)
    });

    const resultText = await response.text()

    if(resultText === 'same_cpf_sign_up') {
      alert('Esse CPF já está cadastrado.')
    } else if (resultText === 'successfully_sign_up') {
      alert('Usuário cadastrado!')
    }

    alert('Usuário alterado com sucesso!')
  } catch(error) {
    console.log("Ocorreu um erro ao cadastrar o usuário: ", error);
  }
})