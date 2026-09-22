<?php

require_once __DIR__ . '/includes/i18n.php';

$products = require __DIR__ . '/data/products.php';
$title = t('site.title');

ob_start();
include __DIR__ . '/templates/home.php';
$content = ob_get_clean();

require __DIR__ . '/includes/layout.php';
