<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

class Homepage
{
    public function __construct(private Response $response)
    {}

    public function show()
    {
        $this->response->setContent('Show text');
        $this->response->sendContent();
    }
}