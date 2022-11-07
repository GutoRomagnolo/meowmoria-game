function validacao(){
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("password");

    if(usuario.value=="" || senha.value==""){
        document.getElementById("erroAmbos").style.display = "block";
    }else{
        window.open("./../select-mode/select_mode.html", "_self");
    }
}