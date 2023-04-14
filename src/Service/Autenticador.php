<?php

namespace TreinoPHP\POO2\Service;

use TreinoPHP\POO2\Interfaces\Autenticavel;

class Autenticador
{
    public function fazerLogin(Autenticavel $user, string $senha): void
    {
        if ($user->autenticarPrivilegio($senha)) {
            echo 'Usuário logado com sucesso.' . PHP_EOL;
        } else {
            echo 'Senha incorreta.' . PHP_EOL;
        }
    }
}