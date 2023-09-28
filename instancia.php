<?php
require "conexao.php";
require "Aplicativo.php";
require "RepositorioAplicativo.php";

$Aplicativo1 = new Aplicativo('Spotify', 'Música', '400 milhões', '4.4', 'Spotify AB');

$repositorioAplicativo = new RepositorioAplicativo();
$repositorioAplicativo->cadastrar($Aplicativo1, $banco);

echo "Aplicativo cadastrado com sucesso!";
?>
