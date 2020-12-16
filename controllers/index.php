<?php

$taakjes = $app['database']->selectAll('todos');
require 'views/index.view.php';
