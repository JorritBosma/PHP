<?php
$naam = 'Jorrit';
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());



// $router = new Router;
// require 'routes.php';
// require $router->direct($uri);
