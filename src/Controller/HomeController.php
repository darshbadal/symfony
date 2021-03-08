<?php


namespace App\Controller;


use http\Env\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @Route("/")
 */
class HomeController
{
    public function homepage()
    {
        return new \Symfony\Component\HttpFoundation\Response('yo');
    }
}