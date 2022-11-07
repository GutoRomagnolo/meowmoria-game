const validateLoginInput = () => {
  const userName = document.getElementById("userName");
  const password = document.getElementById("password");

  if (userName.value === "" || password.value === "") {
    document.getElementById("both-inputs-invalid").style.display = "block";
  } else {
    window.open("./../select-mode/select_mode.html", "_self");
  }
}