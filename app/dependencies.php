<?php
/**
 * User: Jonty
 * Date: 12/5/2017
 */
declare(strict_types = 1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->alias('TrelloClone\Template\Renderer', 'TrelloClone\Template\MustacheRenderer');
$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/public/templates', [
            'extension' => '.html',
        ]),
    ],
]);

$injector->define('TrelloClone\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../public/pages',
]);

$injector->alias('TrelloClone\Page\PageReader', 'TrelloClone\Page\FilePageReader');
$injector->share('TrelloClone\Page\FilePageReader');

return $injector;