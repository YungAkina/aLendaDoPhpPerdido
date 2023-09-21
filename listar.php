<?php
require "conexao.php";
require "aplicativo.php";
require "Repositorioaplicativo.php";

$repLivro = new Repositorioaplicativo();

$todasBebidas = $repBebida->exibirTudo($banco);

foreach($todosAplicativos as $aplicativo){
    echo "\n--------------------------";
    echo "\n nome do aplicativo | {$aplicativo['nomeaplicativo']}";
    echo "\n categoria do aplicativo | {$aplicativo['categoriaaplicativo']}";
    echo "\n numerodedownloads do aplicativo | {$aplicativo['numerodownloadsaplicativo']}";
    echo "\n avaliacao do aplicativo | {$aplicativo['avaliacaoaplicativo']}";
    echo "\n desenvolvedora do aplicativo |{$aplicativo['desenvolvedoraaplicativo']}";
    echo "\n--------------------------";
}

