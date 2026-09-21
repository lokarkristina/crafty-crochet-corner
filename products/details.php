<?php

$products = require __DIR__ . '/../data/products.php';
$id = (int) ($_GET['id'] ?? 0);
$product = $products[$id] ?? null;

if (!$product) {
    http_response_code(404);
}

$title = ($product ? htmlspecialchars($product['title']) : 'Izdelek ni najden') . ' - Crafty Crochet Corner';

ob_start();
include __DIR__ . '/../templates/product-details.php';
$content = ob_get_clean();

require __DIR__ . '/../includes/layout.php';
