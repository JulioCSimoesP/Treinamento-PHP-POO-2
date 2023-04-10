<?php

spl_autoload_register(function ($namespace)
{
    $path = str_replace('PHP\\POO2', 'src', $namespace);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    $path = str_replace('/', DIRECTORY_SEPARATOR, $path);
    $path .= '.php';

    if (file_exists($path)) {
        require_once $path;
    }
});