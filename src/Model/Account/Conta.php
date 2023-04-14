<?php

namespace TreinoPHP\POO2\Model\Account;

abstract class Conta
{
    //Propriedades

    protected static int $numeroDeContas = 0;

    protected Titular $titular;
    protected float $saldo = 0;

    //Construtor

    public function __construct(
        public readonly int $agencia,
        string              $cpf,
        string              $nome,
        string              $cidade,
        string              $bairro,
        string              $rua,
        string              $numero
    )
    {
        $this->titular = new Titular(
            $cpf,
            $nome,
            $cidade,
            $bairro,
            $rua,
            $numero
        );

        self::$numeroDeContas++;

        echo 'Conta criada com sucesso' . PHP_EOL;
    }

    //Destruidor

    public function __destruct()
    {
        self::$numeroDeContas--;
        echo 'O objeto Conta foi destruido.' . PHP_EOL;
    }

    //Métodos públicos

    public function sacar(float $valor): bool
    {
        $saque = $valor + ($valor * $this->taxaOperacao());

        if ($this->saqueInvalido($saque)) {
            return false;
        }

        $this->saldo -= $saque;
        echo 'Saque realizado com sucesso.' . PHP_EOL;
        return true;
    }

    public function depositar(float $valor): bool
    {
        if ($this->depositoInvalido($valor)) {
            return false;
        }

        $this->saldo += $valor;
        echo 'Depósito realizado com sucesso.' . PHP_EOL;
        return true;
    }

    //Getters e Setters

    public function getNome(): string
    {
        return $this->titular->getNome();
    }

    public function getCpf(): string
    {
        return $this->titular->getCpf();
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getAgencia(): int
    {
        return $this->agencia;
    }

    public function getCidade(): string
    {
        return $this->titular->getCidade();
    }

    public function getBairro(): string
    {
        return $this->titular->getBairro();
    }

    public function getRua(): string
    {
        return $this->titular->getRua();
    }

    public function getNumero(): string
    {
        return $this->titular->getNumero();
    }

    public function setNome(string $nome): void
    {
        $this->titular->setNome($nome);
    }

    public function setEndereco(string $cidade, string $bairro, string $rua, string $numero): void
    {
        $this->titular->setEndereco($cidade, $bairro, $rua, $numero);
    }

    //Métodos privados

    protected function saqueInvalido(float $valor): bool
    {
        if ($valor <= 0) {
            echo 'Valor de saque inválido.' . PHP_EOL;
            return true;
        }

        if ($valor > $this->saldo) {
            echo 'Saldo insuficiente.' . PHP_EOL;
            return true;
        }

        return false;
    }

    protected function depositoInvalido(float $valor): bool
    {
        if ($valor <= 0) {
            echo 'Valor de depósito inválido.' . PHP_EOL;
            return true;
        }

        return false;
    }

    abstract protected function taxaOperacao(): float;
    /*Modelo de implementação:
    {
        return (*valor da taxa*)
    }
    */

    //Métodos estáticos

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}