<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route   = new Router(url(), ":");

/*
 * WEB ROUTES
 */
$route->namespace('Source\App');
$route->get("/", "Web:home");
$route->post("/contato", "Web:contact");

/**
 * ADMIN ROUTES
 */
$route->namespace('Source\App');
$route->group("/admin");
$route->get("/", "Admin:home");
$route->get("/contatos", "Admin:contacts");
$route->get("/contatos/{page}", "Admin:contacts");
$route->get("/usuarios", "Admin:users");
$route->get("/usuarios/{page}", "Admin:users");
$route->get("/usuarios/novo", "Admin:register");
$route->post("/usuarios/novo", "Admin:register");
$route->get("/usuarios/{id}/editar", "Admin:edit");
$route->post("/usuarios/{id}/editar", "Admin:edit");
$route->get("/usuarios/{id}/excluir", "Admin:exclude");
$route->get("/sair", "Admin:logout");

$route->get("/login", "Web:login");
$route->post("/login", "Web:login");


$route->group('/ops');
$route->get('/{errCode}',"Web:error");

/*
 * ROUTE
 */
$route->dispatch();


/**
 * ERROR REDIRECT
 */
if ($route->error()) {
  $route->redirect("/ops/{$route->error()}");
}


ob_end_flush();
