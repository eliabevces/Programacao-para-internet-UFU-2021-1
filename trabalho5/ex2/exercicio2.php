<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Exercicio2</title>
</head>

<body>



    <?php
    $produtos = ['produto1','produto2','produto3','produto4','produto5','produto6','produto7','produto8','produto9','produto10'];
    $descricao = ['exemplo de descrição 1','exemplo de descrição 2','exemplo de descrição 3','exemplo de descrição 4','exemplo de descrição 5','exemplo de descrição 6','exemplo de descrição 7','exemplo de descrição 8','exemplo de descrição 9','exemplo de descrição 10'];

    $qde = $_GET["qde"];

    for($i = 0; $i < $qde; $i++){
        $rand = rand(0,9);
        $temp = $i + 1;
        echo <<<HTML
        <div class="row">
            <div class="col-4">
                $temp
            </div>
            <div class="col-4">
                $produtos[$rand]
            </div>
            <div class="col-4">
                $descricao[$rand]
            </div>
        </div>
        HTML;
    }

    ?>
</body>

</html>