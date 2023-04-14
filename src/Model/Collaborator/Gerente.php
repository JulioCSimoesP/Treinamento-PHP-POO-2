<?php

namespace TreinoPHP\POO2\Model\Collaborator;

use TreinoPHP\POO2\Interfaces\Autenticavel;

final class Gerente extends Funcionario implements Autenticavel
{
    //Propriedades

    protected string $cargo = 'Gerente';

    //Métodos públicos

    public function calcularBonificacao(): float
    {
        return $this->salario;
    }

    //Interfaces

    public function autenticarPrivilegio(string $senha): bool
    {
        return $senha === '4321';
    }
}