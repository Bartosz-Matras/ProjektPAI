<?php

//phpinfo();

require "Routing.php";

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('login', 'SecurityController');
Routing::get('project', 'DefaultController');
Routing::post('login', 'SecurityController');

Routing::run($path);