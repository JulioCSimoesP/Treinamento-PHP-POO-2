<?php

use TreinoPHP\POO2\Model\Account\{ContaCorrente, ContaPoupanca};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(11, '123.456.789-10', 'Joãozinho', 'São Paulo', 'Luz', 'GV', '13');

$contaPoupanca = new ContaPoupanca(12, '987.654.321-10', 'Patrícia', 'Manaus', 'Flores', 'Japão', '70A');

$contaCorrente->depositar(1000);
echo 'Saldo da conta corrente: ' . $contaCorrente->getSaldo() . PHP_EOL . PHP_EOL;

$contaPoupanca->depositar(200);
echo 'Saldo da conta poupança: ' . $contaPoupanca->getSaldo() . PHP_EOL . PHP_EOL;

$contaCorrente->transferir(100, $contaCorrente);

$contaCorrente->transferir(100, $contaPoupanca);
echo 'Saldo da conta corrente: ' . $contaCorrente->getSaldo() . PHP_EOL . PHP_EOL;
echo 'Saldo da conta poupança: ' . $contaPoupanca->getSaldo() . PHP_EOL . PHP_EOL;

$contaCorrente->sacar(100);
$contaPoupanca->sacar(100);
echo 'Saldo da conta corrente: ' . $contaCorrente->getSaldo() . PHP_EOL . PHP_EOL;
echo 'Saldo da conta poupança: ' . $contaPoupanca->getSaldo() . PHP_EOL . PHP_EOL;
