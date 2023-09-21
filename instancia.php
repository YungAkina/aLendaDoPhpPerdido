<?php
require "aplicativo.php";
require "conexao.php";
require "repositorioaplicativo";
$aplicativo = new aplicativo('spotify, musica, 400 milhoes, 4,4, Spotify AB');

$repaplicativo= new repositorioaplicativo();

$aplicativo1 = new aplicativo('Spotify, Música, 400 milhões, 4,4 , Spotify AB');
$aplicativo2 = new aplicativo('Whatsapp, mensagens, 2 bilhões, 4,5 , Whatsapp LLC');
$aplicativo3 = new aplicativo('Netflix, filmes e séries, 10 milhões, 4,3 , DevOps');

$repaplicativo->cadastrar($banco,$aplicativo1);
$repaplicativo->cadastrar($banco,$aplicativo2);
$repaplicativo->cadastrar($banco,$aplicativo3);

$tabela = "CREATE TABLE IF NOT EXISTS aplicativo(nomeaplicativo TEXT, categoriaaplicativo TEXT, numerodedownloadsaplicativo TEXT, avaliacaoaplicativo TEXT, desenvolvedoraaplicativo TEXT, primary key(codigo))";

$banco->query($tabela);

