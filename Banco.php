<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$conta1 = new Conta(11, '123.456.789-10', 'Joãozinho');
$conta1->depositar(5000);
echo 'O saldo do titular "'.$conta1->getTitular().'" é de R$ '.$conta1->getSaldo() . PHP_EOL . PHP_EOL;

$conta1->sacar(1000);
echo 'O saldo atual de "'.$conta1->getTitular().'" é de R$ '.$conta1->getSaldo() . PHP_EOL . PHP_EOL;

$conta2 = new Conta(12, '987.654.321-10', 'Patrícia');
$conta1->transferir(1500, $conta2);
echo 'O saldo atual do titular "'.$conta1->getTitular().'" é de R$ '.$conta1->getSaldo().' enquanto que o saldo atual do titular "'.$conta2->getTitular().'" é de R$ '.$conta2->getSaldo() . PHP_EOL . PHP_EOL;

echo 'O total de contas criadas é '.Conta::getNumeroDeContas() . PHP_EOL . PHP_EOL;

$titular = $conta1->getTitular();
$cpf = $conta1->getCpf();
$agencia = $conta1->getAgencia();
$saldo = $conta1->getSaldo();
echo <<<FINAL
    A primeira conta possui as propriedades:
    Nome do titular: $titular
    CPF do titular: $cpf
    Agencia da conta: $agencia
    Saldo da conta: $saldo
    FINAL. PHP_EOL . PHP_EOL;

$conta1->setTitular('Matheus');
echo 'O nome do titular da primeira conta agora é '.$conta1->getTitular();
echo PHP_EOL . PHP_EOL;