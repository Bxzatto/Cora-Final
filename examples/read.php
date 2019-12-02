<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\Tipo_lugar;

$users = new Tipo_lugar();

$lista = $users->find()->fetch(true);

print_r($lista);