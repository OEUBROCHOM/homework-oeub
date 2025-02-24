<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);
$route->get("/pages/login-v2", [WelcomeController::class, 'login']);
$route->post("/pages/login", [WelcomeController::class, 'loginPost']);
$route->get("/pages/register", [WelcomeController::class,'register']);

$route->route();