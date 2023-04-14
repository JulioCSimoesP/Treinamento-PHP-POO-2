<?php

namespace TreinoPHP\POO2\Model\Collaborator;

final class Desenvolvedor extends Funcionario
{
    //Propriedades

    protected string $cargo = 'Desenvolvedor';
    private string $subcargo;
    private int $idSubcargo;

    //Construtor

    public function __construct(
        string $nome,
        string $cpf,
        float $salario,
        int $idSubcargo)
    {
        parent::__construct($nome, $cpf, $salario);

        $idSubcargo = $this->validaIdSubcargo($idSubcargo);

        $this->idSubcargo = $idSubcargo;
        $this->setSubcargo($idSubcargo);
    }

    //Getters e Setters

    public function getCargo(): string
    {
        return $this->cargo . ' ' . $this->subcargo;
    }

    //Métodos públicos

    public function promover(): void
    {
        if ($this->promocaoImpossivel($this->idSubcargo)) {
            return;
        }

        $this->idSubcargo += 1;
        $this->setSubcargo($this->idSubcargo);
        $this->salario += $this->salario * 0.75;

        echo 'Parabéns ' . $this->getNome() . ', você foi promovido para ' . $this->getCargo() . '. Seu salário agora é de R$ ' . $this->getSalario() . PHP_EOL;
    }

    //Métodos privados

    private function validaIdSubcargo(int $id): int
    {
        if ($id !== 1 && $id !== 2 && $id !== 3) {
            return 0;
        }

        return $id;
    }

    private function setSubcargo(int $id): void
    {
        $this->subcargo = match ($id) {
            1 => 'Junior',
            2 => 'Pleno',
            3 => 'Senior',
            default => 'Estagiário',
        };
    }

    private function promocaoImpossivel($id): bool
    {
        if ($id >= 3) {
            echo 'O funcionário já está no nível mais alto.' . PHP_EOL;
            return true;
        }

        return false;
    }

    //Interfaces

    public function calcularBonificacao(): float
    {
        return 500;
    }
}