<?php

namespace TreinoPHP\POO2\Model\Collaborator;

use TreinoPHP\POO2\Interfaces\Autenticavel;

final class CEO extends Funcionario implements Autenticavel
{
    //Propriedades

    protected string $cargo = 'CEO';

    //Métodos públicos

    public function calcularBonificacao(): float
    {
        return $this->salario * 2;
    }

    //Interfaces

    public function autenticarPrivilegio(string $senha): bool
    {
        return $senha === '1234';
    }
}