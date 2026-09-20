<?php

$products = require __DIR__ . '/data/products.php';
$title = 'Crafty Crochet Corner';

ob_start();
include __DIR__ . '/templates/home.php';
$content = ob_get_clean();

require __DIR__ . '/includes/layout.php';
