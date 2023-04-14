<?php

namespace TreinoPHP\POO2\Interfaces;

interface Autenticavel
{
    public function autenticarPrivilegio(string $senha): bool;
    /*
     * Método que deve verificar se a senha fornecida coincide com a senha definida para a classe que implementar a interface.
    */
}