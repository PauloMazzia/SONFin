<?php

//use Psr\Http\Message\RequestInterface;
//use Psr\Http\Message\ServerRequestInterface;
use SONFin\Application;
//use SONFin\Models\CategoryCost;
use SONFin\Plugins\AuthPlugin;
use SONFin\Plugins\DbPlugin;
use SONFin\Plugins\RoutePlugin;
use SONFin\Plugins\ViewPlugin;
use SONFin\ServiceContainer;
//use Zend\Diactoros\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

/* -- PlugIns -- */
$app->plugin(new RoutePlugin());
$app->plugin(new ViewPlugin());
$app->plugin(new DbPlugin());
$app->plugin(new AuthPlugin());

/*
$app->get('/{name}',function (RequestInterface $request) use($app){
    $view =$app->service('view.renderer');
    return $view->render('teste.html.twig', ['name' => 'MAZZIA']);
});

$app->get('/home/{name}/{id}',function (ServerRequestInterface $request){
    $response = new Response();
    $response->getBody()->write("Emitter: ");
    return $response;
});*/

require_once  __DIR__ . '/../src/Controllers/CategoryCosts.php';
require_once  __DIR__ . '/../src/Controllers/users.php';
require_once  __DIR__ . '/../src/Controllers/auth.php';

$app->start();