<?php

namespace TreinoPHP\POO2\Traits;

trait PropertyAccess
{
    public function __get(string $name)
    {
        $metodo = 'get' . ucfirst($name);
        return $this->$metodo();
    }
}