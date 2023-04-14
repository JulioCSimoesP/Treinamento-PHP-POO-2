<?php

use TreinoPHP\POO2\Model\Account\{ContaCorrente, ContaPoupanca};
use TreinoPHP\POO2\Model\Collaborator\Desenvolvedor;

require_once 'autoload.php';

$conta1 = new ContaCorrente(
    11,
    '123.456.789-10',
    'Joãozinho',
    'São Paulo',
    'Luz',
    'GV',
    '13'
);

$agencia1 = $conta1->getAgencia();
$cpf1 = $conta1->getCpf();
$nome1 = $conta1->getNome();
$saldo1 = $conta1->getSaldo();
$cidade1 = $conta1->getCidade();
$bairro1 = $conta1->getBairro();
$rua1 = $conta1->getRua();
$numero1 = $conta1->getNumero();

$conta2 = new ContaPoupanca(
    12,
    '987.654.321-10',
    'Patrícia',
    'Manaus',
    'Flores',
    'Japão',
    '70A'
);

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

echo 'O total de contas criadas é igual a ' . ContaCorrente::getNumeroDeContas() . PHP_EOL . PHP_EOL;

$funcionario1 = new Desenvolvedor(
    'Mario',
    '132.987.498-15',
    5000,
    1
);

$nomeFuncionario1 = $funcionario1->getNome();
$cpfFuncionario1 = $funcionario1->getCpf();
$cargoFuncionario1 = $funcionario1->getCargo();
$salarioFuncionario1 = number_format($funcionario1->getSalario(), 2, ',', '');
$bonificacaoFuncionario1 = number_format($funcionario1->calcularBonificacao(), 2, ',', '');

echo <<<FINAL
    Dados do funcionário:
    
    Nome do funcionário: $nomeFuncionario1
    CPF do funcionário: $cpfFuncionario1
    Cargo do funcionário: $cargoFuncionario1
    Salário do funcionário: R$ $salarioFuncionario1
    Bonificação do funcionário: R$ $bonificacaoFuncionario1
    FINAL. PHP_EOL . PHP_EOL;

$conta1->setNome('Joséfino');
echo 'O titular da conta 1 agora se chama '.$conta1->getNome() . PHP_EOL;

$conta1->setEndereco(
    'Porto Alegre',
    'Japiim',
    'Marechal',
    '999'
);
$cidade1 = $conta1->getCidade();
$bairro1 = $conta1->getBairro();
$rua1 = $conta1->getRua();
$numero1 = $conta1->getNumero();
echo 'O endereço da conta 1 agora é: '.$cidade1.', '.$bairro1.', '.$rua1.', '.$numero1.'.' . PHP_EOL . PHP_EOL;

