<?php

require "../database/conexaoMysql.php";
$pdo = mysqlConnect();

$nome = $sexo = $email = $telefone = "";
$cep = $logradouro = $estado = "";
$cidade = "";
if (isset($_POST["nome"])) $nome = $_POST["nome"];
if (isset($_POST["sexo"])) $sexo = $_POST["sexo"];
if (isset($_POST["email"])) $email = $_POST["email"];
if (isset($_POST["telefone"])) $telefone = $_POST["telefone"];
if (isset($_POST["cep"])) $cep = $_POST["cep"];
if (isset($_POST["logradouro"])) $logradouro = $_POST["logradouro"];
if (isset($_POST["estado"])) $estado = $_POST["estado"];
if (isset($_POST["cidade"])) $cidade = $_POST["cidade"];

$peso = $altura = $tiposanguineo = "";
if (isset($_POST["peso"])) $peso = $_POST["peso"];
if (isset($_POST["altura"])) $altura = $_POST["altura"];
if (isset($_POST["tiposanguineo"])) $tiposanguineo = $_POST["tiposanguineo"];

$sql1 = <<<SQL
  INSERT INTO Pessoa (nome, sexo, email, telefone, 
    cep, logradouro, estado, cidade)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?)
  SQL;

$sql2 = <<<SQL
  INSERT INTO Paciente 
    (codigo, peso, altura, tipo_sanguineo)
  VALUES (?, ?, ?, ?)
  SQL;

try {
  $pdo->beginTransaction();

  $stmt1 = $pdo->prepare($sql1);
  if (!$stmt1->execute([
    $nome, $sexo, $email, $telefone,
    $cep, $logradouro, $estado, $cidade
  ])) throw new Exception('Falha na inserção pessoa');


  $codigo = $pdo->lastInsertId();
  $stmt2 = $pdo->prepare($sql2);
  if (!$stmt2->execute([
    $codigo, $peso, $altura, $tiposanguineo
  ])) throw new Exception('Falha na inserção paciente');

  // Efetiva as operações
  $pdo->commit();

  header("location: index.html");
  exit();
} 
catch (Exception $e) {
  $pdo->rollBack();
  if ($e->errorInfo[1] === 1062)
    exit('Dados duplicados: ' . $e->getMessage());
  else
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}