<?php
// Local dev router for php -S
// Usage: php -S localhost:5050 router.php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/adventures'   => 'adventures.php',
    '/conferences'  => 'conferences.php',
    '/projects'     => 'projects.php',
];

if (isset($routes[$path])) {
    require __DIR__ . '/' . $routes[$path];
} else {
    return false; // serve file as-is
}
