<?php

require __DIR__.'/vendor/autoload.php';

$db = \PXP\Data\DB::init();

$db->create('markers', [
    'title' => 'string not null',
    'author' => 'string not null',
    'file' => 'string not null',
]);

$db->addColumns('markers', [
    'lat' => 'float',
    'lon' => 'float',
]);
