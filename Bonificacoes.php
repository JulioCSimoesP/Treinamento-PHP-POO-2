<?php

use TreinoPHP\POO2\Model\Collaborator\{CEO, Desenvolvedor, Gerente};
use TreinoPHP\POO2\Service\ControladorBonificacoes;

require_once 'autoload.php';

$funcionarios = [
    new Desenvolvedor(
    'Joãozinho',
    '123.456.789-10',
    6000,
    1
    ),
    new Gerente(
    'Pedro',
    '456.789.123-10',
    8500
    ),
    new CEO(
    'Paulo',
    '123.999.789-90',
    15000
    )
];

$controller = new ControladorBonificacoes();

foreach ($funcionarios as $indice => $sujeito) {
    $controller->somarBonificacao($sujeito);
    echo $sujeito->calcularBonificacao() . PHP_EOL;
    echo $controller->getTotalBonificacoes() . PHP_EOL . PHP_EOL;
}

echo $funcionarios[0]->getNome() . ': ' . $funcionarios[0]->getCargo() . PHP_EOL .
    'Salário: ' . $funcionarios[0]->getSalario() . PHP_EOL;

$funcionarios[0]->promover();

echo $funcionarios[0]->getNome() . ': ' . $funcionarios[0]->getCargo() . PHP_EOL .
    'Salário: ' . $funcionarios[0]->getSalario() . PHP_EOL;

$funcionarios[0]->promover();

echo $funcionarios[0]->getNome() . ': ' . $funcionarios[0]->getCargo() . PHP_EOL .
    'Salário: ' . $funcionarios[0]->getSalario() . PHP_EOL;

$funcionarios[0]->promover();