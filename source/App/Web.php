<?php

namespace Source\App;

class Web
{
    public function __construct()
    {   
    }
    public function home($data): void 
    {
        echo "<h1>Bea webcorna</h1>";
    }
    public function criarRoteiro($data): void 
    {
        echo "<h1>Contato</h1>";
    }
    public function error(array $data): void 
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}