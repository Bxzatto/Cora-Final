<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;     

class Acessibilidade extends DataLayer
{
    public function __construct()
    {
    parent::__construct("acessibilidade", ["def"], "id_def");
    }

    public function add( string $def): Acessibilidade
{

    $this->def = $def;

    //$this->save();
    return $this;
}
}