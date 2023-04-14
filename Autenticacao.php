<?php

use TreinoPHP\POO2\Model\Collaborator\CEO;
use TreinoPHP\POO2\Model\Collaborator\Gerente;
use TreinoPHP\POO2\Service\Autenticador;
use TreinoPHP\POO2\Model\Account\Titular;

require_once 'autoload.php';

$system = new Autenticador();
$users = [
    new CEO(
    'Carlinhos',
    '123.456.789-10',
    20000
    ),
    new Gerente(
        'Fernando',
        '321.456.789-50',
        10000
    ),
    new Titular(
        '123.456.789-55',
        'Marcelo',
        'Ouro Preto',
        'Centro',
        'Esquina',
        '70'
    )
];

$system->fazerLogin($users[0], 1234);
$system->fazerLogin($users[1], 4321);
$system->fazerLogin($users[2], 'abcd');