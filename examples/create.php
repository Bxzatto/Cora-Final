<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\User;

$user = new User();
$user-> add("bdeeelo", "me apague", "Ferreira", "shjfh");


var_dump($user);