<?php
require "conexao.php";
require "RepositorioAplicativo.php";

$repositorio = new RepositorioAplicativo();

$valores = $repositorio->listar($banco);

foreach ($valores as $valor) {
    echo "Nome: " . $valor['nome'] . PHP_EOL;
    echo "Categoria: " . $valor['categoria'] . PHP_EOL;
    echo "Número de Downloads: " . $valor['numerodownloads'] . PHP_EOL;
    echo "Avaliação: " . $valor['avaliacao'] . PHP_EOL;
    echo "Desenvolvedora: " . $valor['desenvolvedora'] . PHP_EOL;
    echo PHP_EOL;
}
?>
