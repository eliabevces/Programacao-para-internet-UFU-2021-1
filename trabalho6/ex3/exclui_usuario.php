<?php
require "../database/conexaoMysql.php";
$pdo = mysqlConnect();

$email = "";
if (isset($_GET["email"]))
  $email = $_GET["email"];

try {

  $sql = <<<SQL
  DELETE FROM usuario
  WHERE email = ?
  LIMIT 1
  SQL;

  $stmt = $pdo->prepare($sql);
  $stmt->execute([$email]);

  header("location: listar_usuarios.php");
  exit();
} 
catch (Exception $e) {  
  exit('Falha inesperada: ' . $e->getMessage());
}