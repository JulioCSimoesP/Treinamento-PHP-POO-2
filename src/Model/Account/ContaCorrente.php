<?php

namespace TreinoPHP\POO2\Model\Account;

class ContaCorrente extends Conta
{
    //Métodos públicos

    public function transferir(float $valor, Conta $destinatario): bool
    {
        if ($this->transferenciaInvalida($destinatario)) {
            return false;
        }

        $this->sacar($valor);
        $destinatario->depositar($valor);
        echo 'Transferência realizada com sucesso.' . PHP_EOL;
        return true;
    }

    //Métodos privados

    private function transferenciaInvalida(Conta $destinatario): bool
    {
        if ($destinatario === $this) {
            echo 'Você não pode transferir para si mesmo.' . PHP_EOL;
            return true;
        }

        return false;
    }

    protected function taxaOperacao(): float
    {
        return 0.05;
    }
}