<?php

    require_once 'conexao.php';

    $sql = "CREATE TABLE IF NOT EXISTS usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(100) UNIQUE NOT NULL,
    ativo BOOLEAN DEFAULT 1,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

    //PREPARAR O COMANDO SQL
    // stmt = statment
    $stmt = $pdo->prepare($sql);

    //EXECUTAR COMANDO SQL
    $stmt->execute();

    //MENSAGEM DE SUCESSO K,UFYT
    echo "Tabela criada com sucesso ou já existente.";

 
?>