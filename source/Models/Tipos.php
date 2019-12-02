<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;     

class Tipos extends DataLayer
{
    public function __construct()
    {
    parent::__construct("tipos", ["tipo", "img"], "id_tipo");
    }

public function add( string $tipo, string $img): Tipos
{

    $this->tipo = $tipo;
    $this->img = $img;

    //$this->save();
    return $this;
}
}