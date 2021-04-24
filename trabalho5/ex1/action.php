<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Resposta</title>
</head>
<body>
<?php
	$cep = $_POST["cep"];
	$logradouro = $_POST["logradouro"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$inputEstado = $_POST["inputEstado"];

	$cep = htmlspecialchars($cep);
	$logradouro = htmlspecialchars($logradouro);
	$bairro = htmlspecialchars($bairro);
	$cidade = htmlspecialchars($cidade);
	$inputEstado = htmlspecialchars($inputEstado);

	
	echo <<<HTML
	<div class="row">
		<div class="col-md">
			$cep
		</div>
		<div class="col-md">
			$logradouro
		</div>
		<div class="col-md">
			$bairro
		</div>
		<div class="col-md">
			$cidade
		</div>
		<div class="col-md">
			$inputEstado
		</div>
	</div>

	HTML;
?>
</body>
</html>