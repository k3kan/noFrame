<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Homepage
{
    public function __construct(private Request $request, private Response $response)
    {}

    public function show()
    {
        $content = '<h1>Hello</h1>';
        $content .= 'User:' . $this->request->query->get('name', 'User');
        $this->response->setContent($content);
        $this->response->sendContent();
    }
}