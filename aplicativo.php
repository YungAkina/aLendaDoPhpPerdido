<?php

class aplicativo{
    private string $nome;
    private string $categoria;
    private string $numerodedownloads;
    private string $avaliacao;
    private string $desenvolvedora;

    function construct__(string $nome, float $categoria, string $numerodedownloads, string $avaliacao, string $desenvolvedora)
    {
        $this->definirnome($nome);
        $this->definircategoria($categoria);
        $this->definirnumerodedownloads($numerodedownloads);
        $this->definiravaliacao($avaliacao);
        $this->definirdesenvolvedora($desenvolvedora);
    }
   function definirnome(string $nome){
    $this->nome = $nome;
   }
    function definircategoria(string $categoria){
        $this->nome = $categoria;
    }
    function definirnumerodedownloads(string $numerodedownloads){
        $this->nome = $numerodedownloads;
    }
    function definiravaliacao(string $avaliacao){
        $this->nome = $avaliacao;
    }
    function definirdesenvolvedora(string $desenvolvedora){
        $this->nome = $desenvolvedora;
    }
    
    
    public function exibirnome()
    {
        return $this->nome;
    }
    public function exibircategoria()
    {
        return $this->categoria;
    }
    public function exibirnumerodedownloads()
    {
        return $this->numerodedownloads;
    }
    public function exibiravaliacao()
    {
        return $this->avaliacao;
    }
    public function exibirdesenvolvedora()
    {
        return $this-> desenvolvedora;
    }

    }


