<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <?php
    function carregaString($arquivo)
    {
     $arq = fopen($arquivo, "r");
     $string = fgets($arq);
     fclose($arq);
     return $string;
    }

    $email = carregaString("email.txt");
    $senha = carregaString("senhaHash.txt");

    $email = htmlspecialchars($email);
    $senha = htmlspecialchars($senha);

    echo <<<HTML
    Email: $email
    <br>
    Senha: $senha
    HTML;

    ?>
</body>
</html>