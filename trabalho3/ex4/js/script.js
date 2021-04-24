window.onload = function() {
    document.forms.formCadastro.onsubmit = validaForm; //chama a função ValidaForm quando o usuario tentar dar submit no formulario
}

function validaForm(e) {
    let form = e.target; //salva o formulario na variavel form
    let formValido = true; // Inicia a variavel formValido como true

    const spanUsuario = form.usuario.nextElementSibling; //salva a tag span em spanUsuario pelo metodo nextElementSibling que pega o proximo elemento do mesmo nivel da Dom
    const spanSenha = form.senha.nextElementSibling; //salva a tag span em spanSenha pelo metodo nextElementSibling que pega o proximo elemento do mesmo nivel da Dom
    const spanEmail = form.email.nextElementSibling; //salva a tag span em spanEmail pelo metodo nextElementSibling que pega o proximo elemento do mesmo nivel da Dom

    spanUsuario.textContent = ""; //deixa o textContent do span vazio
    spanSenha.textContent = ""; //deixa o textContent do span vazio
    spanEmail.textContent = ""; //deixa o textContent do span vazio

    if (form.usuario.value === "") { //se o campo usuario estiver vazio os comandos abaixo são executados
        spanUsuario.textContent = 'O usuário deve ser preenchido'; //o span recebe esse texto
        formValido = false; //a variavel formValido é alterada para false
    }

    if (form.senha.value === "") { //se o campo senha estiver vazio os comandos abaixo são executados
        spanSenha.textContent = 'A senha deve ser preenchida'; //o span recebe esse texto
        formValido = false; //a variavel formValido é alterada para false
    }

    if (form.email.value === "") { //se o campo email estiver vazio os comandos abaixo são executados
        spanEmail.textContent = 'O email deve ser preenchido'; //o span recebe esse texto
        formValido = false; //a variavel formValido é alterada para false
    }

    return formValido; //retorna true se o formulario for valido e false se não for
}