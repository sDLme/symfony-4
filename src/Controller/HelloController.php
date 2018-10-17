<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function index()
    {
        return new Response('
            <html>
                <body>
                    <h1>Hello Symfony 4 World</h1>
                </body>
            </html>
        ');
    }
}