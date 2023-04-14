<?php

namespace TreinoPHP\POO2\Model\Account;

use TreinoPHP\POO2\Model\{Endereco, Pessoa};

class Titular extends Pessoa
{
    //Propriedades

    private Endereco $endereco;

    //Construtor

    public function __construct(
        string $cpf,
        string $nome,
        string $cidade,
        string $bairro,
        string $rua,
        string $numero
    )
    {
        parent::__construct($nome, $cpf);
        $this->endereco = new Endereco($cidade, $bairro, $rua, $numero);
    }

    //Getters e Setters

    public function getCidade(): string
    {
        return $this->endereco->getCidade();
    }

    public function getBairro(): string
    {
        return $this->endereco->getBairro();
    }

    public function getRua(): string
    {
        return $this->endereco->getRua();
    }

    public function getNumero(): string
    {
        return $this->endereco->getNumero();
    }

    public function setEndereco(string $cidade, string $bairro, string $rua, string $numero): void
    {
        $this->endereco->setEndereco($cidade, $bairro, $rua, $numero);
    }

}