<?php

require_once 'CPF.php';

class Titular
{
    public function __construct(
        private string $nome, 
        private CPF $cpf
    ){}

    
    public function getNome(): string
    {
        return $this-> nome;
    }


    public function getCPF(): CPF
    {
        return $this-> cpf;
    }

}