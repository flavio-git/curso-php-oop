<?php

require_once 'src/Conta.php';

$contas = [];

$conta1 = new Conta(new Titular('Flávio', new CPF('111.111.111-11')));
$conta2 = new Conta(new Titular('Gabriela', new CPF('222.222.222-22')));
$conta3 = new Conta(new Titular('Ricardo', new CPF('333.333.333-33')));

$conta1->depositar(100);
$conta2->depositar(200);
$conta3->depositar(300);

array_push($contas, $conta1, $conta2, $conta3);

$conta1->transferir(contaDestino: $conta2, valor: 500);
$conta1->transferir(contaDestino: $conta2, valor: 100);

foreach($contas as $conta){
    echo "{Titular: {$conta->getTitular()->getNome()}, CPF: {$conta->getTitular()->getCPF()->getCpf()}, Saldo: {$conta->getSaldo()}}" . PHP_EOL;
}

echo Conta::$qtdeContas . PHP_EOL;

