<?php
require './vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());



// $router = new Router;
// require 'routes.php';
// require $router->direct($uri);
