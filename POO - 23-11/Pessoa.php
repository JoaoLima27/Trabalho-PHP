<?php
    abstract class Pessoa{
        protected $nome;
        protected $endereco;
        protected $telefone;

    public function setNome ($novoNome){
        $this->nome=$novoNome;
    }
    public function setEndereco ($novoEndereco){
        $this->endereco=$novoEndereco;
    }
    public function setTelefone ($novoTelefone){
        $this->telefone=$novoTelefone;
    }
}
