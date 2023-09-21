<?php

class Repositorioaplicativo{

    public function cadastrar(PDO $banco, aplicativo $aplicativo){
    $sqlInsert = "INSERT INTO Aplicativo(nome, categoria, numerodedownloads, avaliacao, desenvolvedora) VALUES(:n, :cat, :nd, :ava, :d)";
    
    $insert = $banco->prepare($sqlInsert);

    $nome = $aplicativo->exibirnome();
    $categoria = $aplicativo->exibircategoria();
    $numerodedownloads = $aplicativo->exibirnumerodedownloads();
    $avaliacao = $aplicativo->exibiravaliacao();
    $desenvolvedora = $aplicativo->exibirdesenvolvedora();

    $insert->bindParam(":n", $nome);
    $insert->bindParam(":cat" , $categoria);
    $insert->bindParam(":nd" , $numerodedownloads);
    $insert->bindParam(":ava" , $avaliacao);
    $insert->bindParam(":d" , $desenvolvedora);

    $insert->execute();
}


public function exibirtudo(PDO $banco){
    $sql = "SELECT * FROM APLICATIVO";
    $dado = $banco->query($sql);
    return $dado->fetchAll(PDO::FETCH_ASSOC);
}
}