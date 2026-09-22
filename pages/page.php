<?php

require_once __DIR__ . '/../includes/i18n.php';

$pages = require __DIR__ . '/../data/pages.php';
$page = $pages[$_GET['slug'] ?? ''] ?? null;

if (!$page) {
    http_response_code(404);
}

$title = ($page ? htmlspecialchars($page['title']) : t('page.not_found')) . ' - ' . t('site.title');

ob_start();
include __DIR__ . '/../templates/page.php';
$content = ob_get_clean();

require __DIR__ . '/../includes/layout.php';
