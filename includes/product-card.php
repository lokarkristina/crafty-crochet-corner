<?php

/** @var array $product */
// Prefixed so they don't overwrite the page-level $title used by layout.php.
$productTitle = htmlspecialchars($product['title']);
$productUrl = htmlspecialchars($product['url']);
?>

<article class="
    relative flex flex-col overflow-hidden rounded-sm bg-surface shadow-md
    transition-[translate,box-shadow] duration-(--duration-smooth) ease-smooth hover:-translate-y-px hover:shadow-xl
    has-focus-visible:ring-2 has-focus-visible:ring-accent
">
    <div class="img-overlay img-overlay-hover block max-h-50">
        <?php // img is repeated also on product details, so extract into partial if it happens again ?>
        <img
            src="<?= htmlspecialchars($product['image']) ?>"
            alt="<?= $productTitle ?>"
            class="object-cover"
        >
    </div>
    <div class="grid h-full grid-rows-[auto_auto_1fr] p-8">
        <h3 class="text-2xl"><?= $productTitle ?></h3>
        <p class="text-xl"><?= htmlspecialchars($product['subtitle']) ?></p>
        <div class="mt-5 space-y-2 text-sm">
            <?php foreach (array_slice($product['teaser'], 0, 4) as $paragraph) : ?>
                <p><?= htmlspecialchars($paragraph) ?></p>
            <?php endforeach; ?>
        </div>
        <div class="mt-8">
            <a
                href="<?= $productUrl ?>"
                class="btn after:absolute after:inset-0"
            >
                <span class="btn-icon-swap" aria-hidden="true">
                    <i class="fa-solid fa-fw fa-plus"></i>
                    <i class="fa-solid fa-fw fa-angle-right"></i>
                </span>
                <?= t('product.cta', [':title' => $productTitle]) ?>
            </a>
        </div>
    </div>
</article>
