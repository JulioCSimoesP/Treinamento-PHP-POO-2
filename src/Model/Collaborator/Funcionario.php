<?php

namespace TreinoPHP\POO2\Model\Collaborator;

use TreinoPHP\POO2\Model\Pessoa;

abstract class Funcionario extends Pessoa
{
    //Propriedades

    protected string $cargo;
    protected float $salario;

    //Construtor

    public function __construct(
        string $nome,
        string $cpf,
        float $salario
    )
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    //Getters e Setters

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    //Métodos públicos

    abstract public function calcularBonificacao(): float;

    final public function fornecerAumento(float $valor): void
    {
        if ($this->aumentoInvalido($valor)) {
            return;
        }

        $this->salario += $valor;
    }

    //Métodos privados

    final protected function aumentoInvalido($valor): bool
    {
        if ($valor <= 0) {
            echo 'Valor de aumento inválido';
            return true;
        }

        return false;
    }
}