<?php
class RepositorioAplicativo {
    public function cadastrar(Aplicativo $aplicativo, PDO $pdo) {
        $codigoSql = "INSERT INTO Aplicativo (nome, categoria, numerodownloads, avaliacao, desenvolvedora) VALUES (:n, :cat, :nd, :ava, :d)";
        
        $nome = $aplicativo->exibirNome();
        $categoria = $aplicativo->exibirCategoria();
        $numerodownloads = $aplicativo->exibirNumeroDownloads();
        $avaliacao = $aplicativo->exibirAvaliacao();
        $desenvolvedora = $aplicativo->exibirDesenvolvedora();
    
        $insert = $pdo->prepare($codigoSql);
        $insert->bindParam(":n", $nome);
        $insert->bindParam(":cat", $categoria);
        $insert->bindParam(":nd", $numerodownloads);
        $insert->bindParam(":ava", $avaliacao);
        $insert->bindParam(":d", $desenvolvedora);
        
        $insert->execute();
    }

    public function listar(PDO $pdo) {
        $sql = "SELECT * FROM Aplicativo";
        $select = $pdo->query($sql);
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
