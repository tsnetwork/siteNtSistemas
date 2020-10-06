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

/*
 * ROUTE
 */
$route->dispatch();

ob_end_flush();
