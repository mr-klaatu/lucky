<?php

declare(strict_types=1);

use App\Application\Middleware\SessionMiddleware;
use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

return function (App $app, Twig $twig)  {
    
    $app->add(SessionMiddleware::class);

    // Add Twig-View Middleware
    $app->add(TwigMiddleware::create($app, $twig));
};
