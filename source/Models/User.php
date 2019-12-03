<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;     

class User extends DataLayer
{
    public function __construct()
    {
    parent::__construct("usuario", ["primeiro_nome", "ultimo_nome", "usuario", "senha"], "id_user");
    }

public function add( string $usuario, string $primeiroNome, string $ultimoNome, string $senha): Void
{

    $this->usuario = $usuario;
    $this->primeiro_nome = $primeiroNome;
    $this->ultimo_nome = $ultimoNome;
    $this->senha = $senha;

    $this->save();
    //return $this;
}
}