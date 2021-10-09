<?php

require_once './vendor/autoload.php';

// $loader = new \Twig\Loader\ArrayLoader([
//     'index' => 'Hello {{ name }}!',
// ]);

// $twig = new \Twig\Environment($loader);

$tmp_data = file_get_contents('./assets/static.json');
$static_data = json_decode($tmp_data, true);
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './compilation_cache',
    'debug' => true
]);
echo $twig->render('index.html', ['static' => $static_data]);