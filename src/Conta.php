<?php

require_once 'Titular.php';

class Conta
{
    private Titular $titular;
    private float $saldo = 0;
    public static int $qtdeContas = 0;

    
    public function __construct(Titular $titular)
    {
        $this-> titular = $titular;
        Conta::$qtdeContas ++; 
    }


    public function getTitular(): Titular
    {
        return $this-> titular;
    }


    public function getSaldo(): float
    {
        return $this-> saldo;
    }


    public function depositar(float $valor): void
    {
        if($valor < 0){
            echo "Valor precisa ser positivo maior do que zero";
        } 
        $this-> saldo += $valor;
    }


    public function sacar(float $valor): bool
    {
        if($valor > $this->saldo){
            echo "Saldo insuficiente." . PHP_EOL;
            return false;
        }
        $this-> saldo -= $valor; 
        return true;
    }


    public function transferir(Conta $contaDestino, float $valor): bool
    {
        if($this->sacar(valor: $valor)){
            $contaDestino->depositar($valor);
            return true;
        }
        return false;
    }


    public function __toString(): string
    {
        return `{Titular: $this->titular, Saldo: $this->saldo}`;
    }

}