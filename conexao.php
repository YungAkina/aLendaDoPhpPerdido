<?php
try {
    $banco = new PDO("sqlite:dado.sqlite");
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $criarTabela = "CREATE TABLE IF NOT EXISTS Aplicativo (
        nome TEXT,
        categoria TEXT,
        numerodownloads TEXT,
        avaliacao TEXT,
        desenvolvedora TEXT,
        PRIMARY KEY (nome)
    )";

    $banco->exec($criarTabela);
} catch (PDOException $e) {
    echo "Erro ao acessar o banco de dados!";
    die();
}
?>
