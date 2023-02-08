<?php

declare(strict_types = 1);

require __DIR__ . './../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = new Request($_GET, $_POST, [], $_COOKIE, $_FILES, $_SERVER);
$response = new Response('Content', Response::HTTP_OK, ['content-type' => 'text/html']);

$response->setContent('404 - Page not found');
$response->setStatusCode(Response::HTTP_NOT_FOUND);
$response->send();