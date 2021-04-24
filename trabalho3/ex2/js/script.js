window.onload = function() {
    const campoInteresse = document.querySelector("#interesse"); // salva o campo com id interesse na constante campoInteresse
    campoInteresse.addEventListener("keyup", e => { //função para executar ação com o clicar de um botão no campo com classe interesse
        if (e.key === "Enter") // execução da açao se for clicado a tecla enter
            adicionarInteresse(); // invocação da função adicionarInteresse

    });
}

function adicionarInteresse() { // definição da função adicionar Interesse
    const campoInteresse = document.querySelector("#interesse"); //salva o campo com id interesse na constante campoInteresse
    const listaIntesses = document.querySelector("ol"); //salva a tag ol na constante lista Interesses

    const novoli = document.createElement("li"); //cria um elemento de tag li e salva na constante novoli
    const novoSpan = document.createElement("span"); //cria um elemento de tag span e salva na constante novoSpan
    const novoBotao = document.createElement("button"); //cria um elemento de button span e salva na constante novoBotao

    novoSpan.textContent = campoInteresse.value; //salva o valor de campoInteresse no textContent de novoSpan
    novoBotao.textContent = 'X'; // salva o valor 'X' no textContent de novoBotao

    novoli.appendChild(novoSpan); //adiciona novoSpan no final da estrutura novoli
    novoli.appendChild(novoBotao); //adiciona novoBotao no final da estrutura novoli
    listaIntesses.appendChild(novoli); //adiciona novoli no final da estrutura listaInteresses

    novoBotao.onclick = function() { // função para o click com mouse na estrutura novoBotao
        listaIntesses.removeChild(novoli); //remove o nó filho selecionado da estrutura listaInteresses
    }

    campoInteresse.value = ''; // salva '' como valor de campoInteresse
}