<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'=>__DIR__.'/views',
));

$app->match('/', function() use ($app){
    
    $word = Model::getData();

    return $app['twig']->render('display.html.twig',array(
        'word'=>$word,
    ));
});

$app->run();