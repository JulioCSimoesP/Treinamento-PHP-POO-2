<?php

namespace TreinoPHP\POO2\Model\Collaborator;

class CEO extends Funcionario
{
    //Propriedades

    protected string $cargo = 'CEO';

    //Métodos públicos

    public function calcularBonificacao(): float
    {
        return $this->salario * 2;
    }

    public function autenticarPrivilegio(string $senha): bool
    {
        return $senha === '1234';
    }
}