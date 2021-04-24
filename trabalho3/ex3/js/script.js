window.onload = function() {
    buttons = document.querySelectorAll("nav button"); //seleciona todos botoes dentro da nav e os salva na em buttons
    for (let button of buttons) { // estrutura de repetição para adicionar um event listener a cada botao do nav
        button.addEventListener("click", changeTab); // adiciona eventlistenet ao botao com o click do mouse
    }
    openTab(0); // inicia com a primeira aba aberta
}

function changeTab(e) {
    const botaoAcionado = e.target; //salva o botao em botaoAcionado
    const liDoBotao = botaoAcionado.parentNode; //salva o nó pai do botao clicado em liDoBotao
    const nodes = Array.from(liDoBotao.parentNode.children); //cria um array com todos list items e guarda em nodes
    const index = nodes.indexOf(liDoBotao); //seleciona o indice da lacalização do botao clicado
    openTab(index); //chama a função openTab com o indice do botão clicado
}

function openTab(i) {
    const tabActive = document.querySelector(".tabActive"); //seleciona a aba ativa no momento
    if (tabActive !== null) { //caso ache uma aba ativa
        tabActive.className = ""; //desativa essa aba mudando sua classe para ""
    }

    const buttonActive = document.querySelector(".buttonActive"); //seleciona o botão ativo no momento
    if (buttonActive !== null) { //caso ache um botão ativo
        buttonActive.className = ""; //desativa esse botão mudando sua classe para ""
    }

    document.querySelectorAll(".tabs section")[i].className = "tabActive"; //seleciona a aba de indice i e muda sua classe para ativa
    document.querySelectorAll("nav button")[i].className = "buttonActive"; //seleciona o botão de indice i e muda sua classe para ativo

}