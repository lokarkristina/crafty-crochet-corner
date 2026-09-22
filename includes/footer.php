<?php $socialLinks = require __DIR__ . '/../data/social-links.php'; ?>
<footer class="py-6 text-sm text-muted">
    <div class="container flex flex-wrap items-center justify-between gap-4">
        <p class="text-xs">&copy; <?= date('Y') ?> <?= t('site.title') ?> ♡</p>
        <div class="flex gap-1 text-lg">
            <?php foreach ($socialLinks as $link) : ?>
                <a
                    href="<?= htmlspecialchars($link['url']) ?>"
                    class="
                        p-2 text-muted transition-colors duration-(--duration-smooth) ease-smooth
                        <?= htmlspecialchars($link['class'] ?? '') ?>
                    "
                    aria-label="<?= htmlspecialchars($link['label']) ?>"
                >
                    <i
                        class="<?= htmlspecialchars($link['icon'] . ' ' . ($link['iconClass'] ?? '')) ?>"
                        aria-hidden="true"
                    ></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</footer>
