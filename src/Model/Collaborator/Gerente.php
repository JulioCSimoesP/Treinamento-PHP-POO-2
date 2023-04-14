<?php

namespace TreinoPHP\POO2\Model\Collaborator;

class Gerente extends Funcionario
{
    //Propriedades

    protected string $cargo = 'Gerente';

    //Métodos públicos

    public function calcularBonificacao(): float
    {
        return $this->salario;
    }
}