<?php

namespace TreinoPHP\POO2\Model\Account;

class ContaPoupanca extends Conta
{
    protected function taxaOperacao(): float
    {
        return 0.02;
    }
}