<?php

/** @var array $product */
// Prefixed so they don't overwrite the page-level $title used by layout.php.
$productTitle = htmlspecialchars($product['title']);
$productUrl = htmlspecialchars($product['url']);
?>
<article class="flex flex-col overflow-hidden rounded-sm bg-surface shadow-md">
    <a href="<?= $productUrl ?>" class="relative block">
        <img src="<?= htmlspecialchars($product['image']) ?>"
            alt="<?= $productTitle ?>"
            class="max-h-50 w-full object-cover">
        <span
            class="pointer-events-none absolute inset-0 bg-linear-to-b from-image-from to-image-to opacity-60"
            aria-hidden="true"
        ></span>
    </a>
    <div class="grid h-full grid-rows-[auto_auto_1fr] p-8">
        <h3 class="text-2xl font-bold uppercase">
            <a href="<?= $productUrl ?>" class="inline-block w-full"><?= $productTitle ?></a>
        </h3>
        <p class="text-xl text-muted"><?= htmlspecialchars($product['subtitle']) ?></p>
        <div class="mt-3 space-y-2 text-sm text-muted">
            <?php foreach (array_slice($product['teaser'], 0, 4) as $paragraph) : ?>
                <p><?= htmlspecialchars($paragraph) ?></p>
            <?php endforeach; ?>
        </div>
        <div class="mt-8">
            <a
                href="<?= $productUrl ?>"
                class="
                    inline-flex items-center gap-2 rounded-md border border-accent px-4 py-2
                    text-sm font-medium text-accent uppercase
                "
            >
                <i class="fa-solid fa-plus" aria-hidden="true"></i>
                Več o <?= $productTitle ?>
            </a>
        </div>
    </div>
</article>
