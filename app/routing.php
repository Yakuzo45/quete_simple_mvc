<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Categorie' => [ // Controller
        ['index', '/categories', 'GET'],
        ['show', '/categorie/{id}', 'GET'], // action, url, HTTP method
    ],
];