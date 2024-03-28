<?php

$request = $_SERVER['REQUEST_URI'];


switch ($request) {

    case '':
    case '/':
        require __DIR__ . '/views/index.php';
        break;

    case '/models':
        require __DIR__ . '/views/models.php';
        break;

    case '/episodes':
        require __DIR__ . '/views/episodes.php';
        break;

    case '/episodes0': // url format: "/episodes/0"
        require __DIR__ . '/views/episode-details.php';
        break;
    case '/models0': // url format: "/models/0"
        require __DIR__ . '/views/model-details.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}