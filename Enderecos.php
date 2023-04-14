<?php

use TreinoPHP\POO2\Model\Endereco;

require_once 'autoload.php';

$local = new Endereco('Minas', 'Jabuticaba', 'São Camilo', '80A');

echo $local . PHP_EOL;

echo "$local->rua, $local->numero, $local->bairro, $local->cidade".PHP_EOL;

$local->cidade = 'Rio';

echo $local;