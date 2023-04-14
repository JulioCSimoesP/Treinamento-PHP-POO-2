<?php

namespace TreinoPHP\POO2\Model;

use TreinoPHP\POO2\Traits\PropertyAccess;

/**
 * Class Endereco
 * @package TreinoPHP\POO2\Model
 * @property string $cidade
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 */

class Endereco
{
    use PropertyAccess;

    //Propriedades & Construtor

    public function __construct(
        private string $cidade,
        private string $bairro,
        private string $rua,
        private string $numero
    ){}

    //Métodos mágicos

    public function __toString(): string
    {
        return "Rua $this->rua, $this->numero, Bairro $this->bairro, $this->cidade";
    }

    public function __set(string $name, $value): void
    {
        $metodo = 'set' . ucfirst($name);
        $this->$metodo($value);
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

    public function setEndereco(
        string $cidade,
        string $bairro,
        string $rua,
        string $numero
    ): void
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;

        echo 'Endereco alterado com sucesso.' . PHP_EOL;
    }

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }
}