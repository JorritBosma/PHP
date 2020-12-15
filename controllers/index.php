<?php

$taakjes = $app['database']->selectAll('todos');
$takke = 'pokkke';
require 'views/index.view.php';
