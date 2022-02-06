<?php

//phpinfo();

require "Routing.php";

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('login', 'SecurityController');
Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::get('project', 'ProjectController');
Routing::post('addPin', 'ProjectController');
Routing::post('addPin2', 'ProjectController');
Routing::post('account', 'ProjectController');
Routing::post('account2', 'ProjectController');
Routing::post('logout', 'ProjectController');
Routing::get('places', 'ProjectController');
Routing::post('search', 'ProjectController');


Routing::run($path);