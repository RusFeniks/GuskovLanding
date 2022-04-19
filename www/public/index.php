<?php
    require_once '../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable('../');
    $dotenv->load();

    $cache = json_decode($_ENV['CACHE']) ? '../cache' : false;

    $loader = new \Twig\Loader\FilesystemLoader('../templates');
    $twig = new \Twig\Environment($loader, [
        'cache' => $cache,
    ]);

    echo $twig->render('base.twig');
?>