<?php

class Titular
{
    //Propriedades

    public readonly string $cpf;
    private string $titular;

    //Construtor

    public function __construct(string $cpf, string $titular)
    {
        if ($this->cpfInvalido($cpf)) {
            die();
        }

        if ($this->titularInvalido($titular)) {
            die();
        }

        $this->cpf = $cpf;
        $this->titular = $titular;
    }

    //Getters e Setters

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function setTitular(string $titular): void
    {
        $this->titular = $titular;
    }

    //Métodos privados

    private function cpfInvalido(string $cpf): bool
    {
        if (preg_match('/([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})/', $cpf)) {
            return false;
        }

        echo 'Formato de CPF inválido' . PHP_EOL;
        return true;
    }

    private function titularInvalido(string $titular): bool
    {
        if (mb_strlen($titular) >= 5) {
            return false;
        }

        echo 'O nome do titular precisa ter pelo menos 5 caracteres' . PHP_EOL;
        return true;
    }
}