<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;     

class Lugares extends DataLayer
{
    public function __construct()
    {
    parent::__construct("lugares", ["des", "img", "rua", "num"], "id_lugar");
    }

    public function add( string $des, string $img, string $rua, int $num):Lugares
{

    $this->des = $des;
    $this->img = $img;
    $this->rua = $rua;
    $this->num = $num;

    //$this->save();
    return $this;
}
}