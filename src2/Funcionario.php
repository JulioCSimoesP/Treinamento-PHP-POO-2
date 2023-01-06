<?php

class Funcionario extends Pessoa
{
    //Propriedades

    private string $cargo;

    //Construtor

    public function __construct(
        string $nome,
        string $cpf,
        string $cargo
    )
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    //Getters e Setters

    public function getCargo(): string
    {
        return $this->cargo;
    }

}