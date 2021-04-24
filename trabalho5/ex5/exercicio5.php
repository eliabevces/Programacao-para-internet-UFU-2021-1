<?php
    function carregaString($arquivo)
    {
     $arq = fopen($arquivo, "r");
     $string = fgets($arq);
     fclose($arq);
     return $string;
    }

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $senha = carregaString("../ex3e4/senhaHash.txt");
    $emailBD = carregaString("../ex3e4/email.txt");

    if(password_verify($password,$senha) && $email == $emailBD ){
        header("Location: tela_sucesso.html");
        exit();
    }else{
        header("Location: index.html");
        exit();
    }


?>
