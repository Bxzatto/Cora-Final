<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findbyId(2);
$user->primeiro_nome = "Rogerin PicA dOCE";
$user->save();
var_dump($user);