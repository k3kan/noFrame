<?php

declare(strict_types = 1);
use Auryn\Injector;

$injector = new Injector();

$injector->share('Symfony\Component\HttpFoundation\Request');
$injector->define('Symfony\Component\HttpFoundation\Request', [
    ':query' => $_GET,
    ':request' => $_POST,
    ':attributes' => [],
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER
]);

$injector->share('App\Page\FilePageReader');
$injector->define('App\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../pages',
]);
$injector->share('Symfony\Component\HttpFoundation\Response');
$injector->define('Symfony\Component\HttpFoundation\Response', [
    ':content' => 'Content',
    ':status' => 200,
    ':headers' => ['content-type' => 'text/html'],
]);
$injector->share('Twig\Loader\FilesystemLoader');
$injector->define('Twig\Loader\FilesystemLoader', [
    ':paths' => __DIR__ . '/Template',
]);
$injector->share('Twig\Environment');
$injector->define('Twig\Environment', [
    'loader' => 'Twig\Loader\FilesystemLoader',
]);

return $injector;