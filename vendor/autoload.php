<?php

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

// Define dd as laravel
function dd(){
    array_map(function ($x) {
        dump($x);
    }, func_get_args());

    die(1);
}

return ComposerAutoloaderInit6ef74a8de55668562f82b0288adc8a68::getLoader();
