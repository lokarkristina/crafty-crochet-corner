<?php
/** @var array|null $product */
?>
<?php if ($product) : ?>
    <?php
    // Prefixed so they don't overwrite the page-level $title used by layout.php.
    $productTitle = htmlspecialchars($product['title']);
    ?>
    <div class="grid md:grid-cols-3 gap-8">
        <?php // img is repeated also on product card, so extract into partial if it happens again ?>
        <div class="img-overlay w-full md:max-w-md max-h-50 overflow-hidden rounded-md">
            <img
                src="<?= htmlspecialchars($product['image']) ?>"
                alt="<?= $productTitle ?>"
                class="object-cover"
            >
        </div>
        <div class="md:col-span-2">
            <h2 class="text-2xl"><?= $productTitle ?></h2>
            <p class="mt-1 text-xl"><?= htmlspecialchars($product['subtitle']) ?></p>
            <div class="mt-5 space-y-2 text-sm">
                <?php foreach ($product['teaser'] as $paragraph) : ?>
                    <p><?= htmlspecialchars($paragraph) ?></p>
                <?php endforeach; ?>
            </div>
            <?php // Back link: not a primary or secondary action, it doesn't hold that much value ?>
            <a
                href="/index.php"
                class="btn mt-8"
            >
                <i class="fa-solid fa-angle-left" aria-hidden="true"></i>
                Nazaj na vse izdelke
            </a>
        </div>
    </div>
<?php else : ?>
    <p>Žal tega izdelka nismo našli.</p>
<?php endif; ?>
