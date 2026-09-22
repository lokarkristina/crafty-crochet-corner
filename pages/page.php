<?php

$pages = require __DIR__ . '/../data/pages.php';
$page = $pages[$_GET['slug'] ?? ''] ?? null;

if (!$page) {
    http_response_code(404);
}

$title = ($page ? htmlspecialchars($page['title']) : 'Stran ni najdena') . ' - Crafty Crochet Corner';

ob_start();
include __DIR__ . '/../templates/page.php';
$content = ob_get_clean();

require __DIR__ . '/../includes/layout.php';
