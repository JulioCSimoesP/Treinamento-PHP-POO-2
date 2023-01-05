<?php

class Conta
{
    //Propriedades

    private static int $numeroDeContas = 0;

    private Titular $titular;
    private float $saldo = 0;

    //Construtor

    public function __construct(
        public readonly int $agencia,
        string $cpf,
        string $titular
    ) {
        $this->titular = new Titular($cpf, $titular);

        self::$numeroDeContas++;

        echo 'Conta criada com sucesso' . PHP_EOL;
    }

    //Destruidor

    public function __destruct() {
        self::$numeroDeContas--;
        echo 'O objeto Conta foi destruido.' . PHP_EOL;
    }

    //Métodos públicos

    public function sacar(float $valor): bool
    {
        if ($this->saqueInvalido($valor)) {
            return false;
        }

        $this->saldo -= $valor;
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

    public function transferir(float $valor, Conta $destinatario): bool
    {
        if ($this->transferenciaInvalida($valor, $destinatario)) {
            return false;
        }

        $this->sacar($valor);
        $destinatario->depositar($valor);
        echo 'Transferência realizada com sucesso.' . PHP_EOL;
        return true;
    }

    //Getters e Setters

    public function getTitular(): string
    {
        return $this->titular->getTitular();
    }

    public function getCpf(): string
    {
        return $this->titular->cpf;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getAgencia(): int
    {
        return $this->agencia;
    }

    public function setTitular(string $titular): void
    {
        $this->titular->setTitular($titular);
    }

    //Métodos privados

    private function saqueInvalido(float $valor): bool
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

    private function depositoInvalido(float $valor): bool
    {
        if ($valor <= 0) {
            echo 'Valor de depósito inválido.' . PHP_EOL;
            return true;
        }

        return false;
    }

    private function transferenciaInvalida(float $valor, Conta $destinatario): bool
    {
        if ($valor <= 0) {
            echo 'Valor de transferência inválido.' . PHP_EOL;
            return true;
        }

        if ($valor > $this->saldo) {
            echo 'Saldo insuficiente.' . PHP_EOL;
            return true;
        }

        if ($destinatario === $this) {
            echo 'Você não pode transferir para si mesmo.' . PHP_EOL;
            return true;
        }

        return false;
    }

    //Métodos estáticos

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}