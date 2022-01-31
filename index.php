<?php

namespace App;

require_once('vendor/autoload.php');

use Router\Router;
$router = new Router($_GET['url']);

$router->get("/ArticleA", "App\Controller\ManagerController@add");
$router->post("/ArticleA", "App\Controller\ManagerController@add");

$router->get("/ArticleM/:id", "App\Controller\ManagerController@modify");
$router->post("/ArticleM/:id", "App\Controller\ManagerController@modify");

$router->get("/CommentA/:id", "App\Controller\CriticController@add");
$router->post("/CommentA/:id", "App\Controller\CriticController@add");

$router->get("/CommentM/:id", "App\Controller\CriticController@modify");
$router->post("/CommentM/:id", "App\Controller\CriticController@modify");
$router->run();