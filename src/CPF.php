<?php

class CPF
{
    public function __construct(
        private string $cpf
    )
    {}


    public function getCpf(): string
    {
        return $this-> cpf;
    }

    
}