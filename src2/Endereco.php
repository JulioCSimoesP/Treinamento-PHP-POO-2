<?php

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
}