<?php
    require_once "Pessoa.php";
    class PessoaFisica extends Pessoa{
        private $cpf;

        public function pessoaFisica($nome,  $endereco, $telefone, $novoCPF){

        $this->nome=$nome;
        $this->endereco=$endereco;
        $this->telefone=$telefone;
        $this->cpf=$novoCPF;
    }
        public function setCPF ($novoCPF){
            $this->cpf=$novoCPF;
    }

}