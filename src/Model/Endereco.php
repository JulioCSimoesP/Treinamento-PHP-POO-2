<?php

namespace PHP\POO2\Model;

class Endereco
{
    //Propriedades/Construtor

    public function __construct(
        private string $cidade,
        private string $bairro,
        private string $rua,
        private string $numero
    )
    {
    }

    // Getters e Setters

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setEndereco(string $cidade, string $bairro, string $rua, string $numero): void
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;

        echo 'Endereco alterado com sucesso.' . PHP_EOL;
    }
}