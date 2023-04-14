<?php

namespace TreinoPHP\POO2\Service;

use TreinoPHP\POO2\Model\Collaborator\Funcionario;

class ControladorBonificacoes
{
    //Propriedades

    private float $totalBonificacoes = 0;

    //Getters e Setters

    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }

    //Métodos públicos

    public function somarBonificacao(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }
}