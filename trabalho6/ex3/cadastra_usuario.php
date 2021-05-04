<?php

    require "../database/conexaoMysql.php";
    $pdo = mysqlConnect();

    $email = $password = "";

    if (isset($_POST["email"])) $email = $_POST["email"];
    if (isset($_POST["password"])) $password = $_POST["password"];

    $hashsenha = password_hash($password, PASSWORD_DEFAULT);

    try {

    $sql = <<<SQL
    INSERT INTO usuario (email, hash_senha)
    VALUES (?, ?)
    SQL;


    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $email, $hashsenha
    ]);

    header("location: index.html");
    exit();
    } 
    catch (Exception $e) {  
    //error_log($e->getMessage(), 3, 'log.php');
    if ($e->errorInfo[1] === 1062)
        exit('Dados duplicados: ' . $e->getMessage());
    else
        exit('Falha ao cadastrar os dados: ' . $e->getMessage());
    }

?>