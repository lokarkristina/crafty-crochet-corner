<?php

require_once __DIR__ . '/../includes/i18n.php';

$products = require __DIR__ . '/../data/products.php';
$id = (int) ($_GET['id'] ?? 0);
$product = $products[$id] ?? null;

if (!$product) {
    http_response_code(404);
}

$title = ($product ? htmlspecialchars($product['title']) : t('product.not_found')) . ' - ' . t('site.title');

ob_start();
include __DIR__ . '/../templates/product-details.php';
$content = ob_get_clean();

require __DIR__ . '/../includes/layout.php';
