<?php
class Aplicativo {
    private string $nome;
    private string $categoria;
    private string $numerodownloads;
    private string $avaliacao;
    private string $desenvolvedora;

    public function __construct(string $nome, string $categoria, string $numerodownloads, string $avaliacao, string $desenvolvedora) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->numerodownloads = $numerodownloads;
        $this->avaliacao = $avaliacao;
        $this->desenvolvedora = $desenvolvedora;
    }

    public function exibirNome() {
        return $this->nome;
    }

    public function exibirCategoria() {
        return $this->categoria;
    }

    public function exibirNumeroDownloads() {
        return $this->numerodownloads;
    }

    public function exibirAvaliacao() {
        return $this->avaliacao;
    }

    public function exibirDesenvolvedora() {
        return $this->desenvolvedora;
    }
}
?>
