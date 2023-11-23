<?php
    require_once "Pessoa.php";
    class PessoaJuridica extends Pessoa{
        private $cnpj;

        public function pessoaJuridica($nome,  $endereco, $telefone, $novoCnpj){

        $this->nome=$nome;
        $this->endereco=$endereco;
        $this->telefone=$telefone;
        $this->cnpj=$novoCnpj;
    }
        public function setCPF ($novoCnpj){
            $this->cnpj=$novoCnpj;
    }

}