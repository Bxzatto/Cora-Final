<?php

require __DIR__ . "/vendor/autoload.php";

$router = new \CoffeeCode\Router\Router(ROOT);

$router->namespace("Source\App");

$router->group(null);
$router->get("/","Web:home");
$router->get("/criarRoteiro", "Web:criarRoteiro");
$router->get("/teste", "Web:home");

$router->group("ops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if ($router->error()){
    $router->redirect("/ops/{$route->error()}");
}