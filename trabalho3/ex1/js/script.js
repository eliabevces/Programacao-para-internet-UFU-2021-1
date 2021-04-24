window.onload = function() {
    const modal = document.querySelector(".modal"); // seleciona a classe modal e armazena na constante modal

    const buttonClose = modal.querySelector(".buttonClose"); // usa a constante modal para selecionar a classe buttonClose dentro da classse modal

    buttonClose.addEventListener("click", function() { //função de adicionar um event listener no botao que a constante bottonClose aponta, para assim que for clicado executar as ações abaixo 
        modal.style.display = 'none'; //modifica o display de model para none, tornando-o invisivel
    })

    const buttonOpenModal = document.getElementById("btnOpenModal"); // constante armazenando o elemente com id = btnOpenModal
    buttonOpenModal.addEventListener("click", function() { //função de adicionar um event listener no botao que a constante buttonOpenModal aponta, para assim que for clicado executar as ações abaixo 
        modal.style.display = 'block'; //modifica o display de model para block, tornando-o visível
    })
}