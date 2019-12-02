<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;     

class Tipo_lugar extends DataLayer
{
    public function __construct()
    {
    parent::__construct("tipo_lugar",["id_lugar","id_tipo"]);
    }

    public function add( Tipos $tipo, Lugares $lugar): TiposLugar
{

    $this->id_tipo = $tipo->id_tipo;
    $this->id_lugar = $lugar->it_lugar;

    //$this->save();
    return $this;
}
}