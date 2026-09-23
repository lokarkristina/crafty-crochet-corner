<?php
require_once __DIR__ . '/i18n.php';
/** @var string $title */
/** @var string $content */
?>
<!DOCTYPE html>
<html lang="<?= APP_LOCALE ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" href="/assets/images/logo-icon.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="
    grid grid-rows-[auto_1fr_auto]
    bg-page text-muted bg-[radial-gradient(circle,var(--color-dots)_0.75px,transparent_1.25px)] bg-size-[15px_15px]
">
    <a
        href="#main-content"
        class="
            sr-only focus-visible:not-sr-only focus-visible:fixed focus-visible:top-2
            focus-visible:left-2 focus-visible:z-50 focus-visible:rounded-sm focus-visible:bg-surface
            focus-visible:px-4 focus-visible:py-2 focus-visible:text-ink focus-visible:shadow-md
            focus-visible:ring-2 focus-visible:ring-accent
        "
    ><?= t('nav.skip_to_content') ?></a>

    <?php include __DIR__ . '/header.php'; ?>

    <main id="main-content" tabindex="-1" class="pt-4 pb-8">
        <div class="container">
            <?= $content ?>
        </div>
    </main>

    <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
