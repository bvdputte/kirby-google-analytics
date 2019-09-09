<?php

// For composer
@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bvdputte/ga', [
    'options' => [
        "propId" => ""
    ],
    'snippets' => [
        'google-analytics' => __DIR__ . '/snippets/ga.php'
    ]
]);