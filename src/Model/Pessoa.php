<?php

namespace TreinoPHP\POO2\Model;

abstract class Pessoa
{
    protected string $nome;
    protected string $cpf;

    public function __construct(
        string $nome,
        string $cpf
    )
    {
        if ($this->cpfInvalido($cpf)) {
            die();
        }

        if ($this->titularInvalido($nome)) {
            die();
        }

        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    //Getters e Setters

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setNome(string $nome): void
    {
        if ($this->titularInvalido($nome)) {
            die();
        }

        $this->nome = $nome;
    }

    //Métodos privados

    protected function cpfInvalido(string $cpf): bool
    {
        if (preg_match('/([0-9]{2}[.]?[0-9]{3}[.]?[0-9]{3}\/?[0-9]{4}-?[0-9]{2})|([0-9]{3}[.]?[0-9]{3}[.]?[0-9]{3}-?[0-9]{2})/', $cpf) === 1) {
            return false;
        }

        echo 'Formato de CPF inválido' . PHP_EOL;
        return true;
    }

    protected function titularInvalido(string $titular): bool
    {
        if (mb_strlen($titular) >= 5) {
            return false;
        }

        echo 'O nome do titular precisa ter pelo menos 5 caracteres' . PHP_EOL;
        return true;
    }
}