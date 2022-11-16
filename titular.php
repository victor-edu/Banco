<?php

class titular{

    private $nome;
    private $cpf;

    public function __construct(CPF $cpf, string $nome){

        $this->validanome($nome);
        $this->nome=$nome;
        $this->cpf=$cpf;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }
    public function recuperaNome()
    {
        return $this->nome;
    }
    private function validanome($nome)
    {
        if (strlen($nome)<5) {
            echo "Precisamos de pelo menos 5 caracteres:";
            exit();
        }
       
    }
}
















?>