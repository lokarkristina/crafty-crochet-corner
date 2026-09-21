<?php

/** @var array $product */
// Prefixed so they don't overwrite the page-level $title used by layout.php.
$productTitle = htmlspecialchars($product['title']);
$productUrl = htmlspecialchars($product['url']);
?>
<article class="flex flex-col overflow-hidden rounded-sm bg-surface shadow-md">
    <a href="<?= $productUrl ?>" class="img-overlay img-overlay-hover block max-h-50">
        <?php // img is repeated also on product details, so extract into partial if it happens again ?>
        <img
            src="<?= htmlspecialchars($product['image']) ?>"
            alt="<?= $productTitle ?>"
            class="object-cover"
        >
    </a>
    <div class="grid h-full grid-rows-[auto_auto_1fr] p-8">
        <h3 class="text-2xl">
            <a href="<?= $productUrl ?>" class="inline-block w-full"><?= $productTitle ?></a>
        </h3>
        <p class="text-xl"><?= htmlspecialchars($product['subtitle']) ?></p>
        <div class="mt-5 space-y-2 text-sm">
            <?php foreach (array_slice($product['teaser'], 0, 4) as $paragraph) : ?>
                <p><?= htmlspecialchars($paragraph) ?></p>
            <?php endforeach; ?>
        </div>
        <div class="mt-8">
            <a
                href="<?= $productUrl ?>"
                class="btn"
            >
                <i class="fa-solid fa-plus" aria-hidden="true"></i>
                Več o <?= $productTitle ?>
            </a>
        </div>
    </div>
</article>
