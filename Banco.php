<?php

require_once 'src2/Conta.php';
require_once 'src2/Endereco.php';
require_once 'src2/Pessoa.php';
require_once 'src2/Titular.php';

$conta1 = new Conta(11, '123.456.789-10', 'Joãozinho', 'São Paulo', 'Luz', 'GV', '13');

$agencia1 = $conta1->getAgencia();
$cpf1 = $conta1->getCpf();
$nome1 = $conta1->getNome();
$saldo1 = $conta1->getSaldo();
$cidade1 = $conta1->getCidade();
$bairro1 = $conta1->getBairro();
$rua1 = $conta1->getRua();
$numero1 = $conta1->getNumero();

$conta2 = new Conta(12, '987.654.321-10', 'Patrícia', 'Manaus', 'Flores', 'Japão', '70A');

$agencia2 = $conta2->getAgencia();
$cpf2 = $conta2->getCpf();
$nome2 = $conta2->getNome();
$saldo2 = $conta2->getSaldo();
$cidade2 = $conta2->getCidade();
$bairro2 = $conta2->getBairro();
$rua2 = $conta2->getRua();
$numero2 = $conta2->getNumero();

echo <<<FINAL
    Dados da primeira conta:
    
    Nome do titular: $nome1
    CPF do titular: $cpf1
    Agencia da conta: $agencia1
    Saldo da conta: $saldo1
    Cidade do titular: $cidade1
    Bairro do titular: $bairro1
    Rua do titular: $rua1
    Numero da casa do titular: $numero1
    FINAL. PHP_EOL . PHP_EOL;

echo <<<FINAL
    Dados da segunda conta:
    
    Nome do titular: $nome2
    CPF do titular: $cpf2
    Agencia da conta: $agencia2
    Saldo da conta: $saldo2
    Cidade do titular: $cidade2
    Bairro do titular: $bairro2
    Rua do titular: $rua2
    Numero da casa do titular: $numero2
    FINAL. PHP_EOL . PHP_EOL;