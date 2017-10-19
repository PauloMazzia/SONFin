<?php
use Psr\Http\Message\ServerRequestInterface;



$app
    ->get('/statements', function () use ($app) {
        $view = $app->service('view.renderer');
        return $view->render('statement.html.twig');
    }, 'statement.list');