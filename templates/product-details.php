<?php
/** @var array|null $product */
?>
<a href="/index.php" class="mb-4 inline-block hover:underline">&larr; Back to products</a>
<?php if ($product) : ?>
    <?php
    // Prefixed so they don't overwrite the page-level $title used by layout.php.
    $productTitle = htmlspecialchars($product['title']);
    ?>
    <div class="flex flex-wrap gap-8">
        <img
            src="<?= htmlspecialchars($product['image']) ?>"
            alt="<?= $productTitle ?>"
            class="w-full max-w-md rounded-lg"
        >
        <div class="min-w-64 flex-1">
            <h2 class="text-2xl font-semibold"><?= $productTitle ?></h2>
            <p class="mt-1 text-lg text-muted"><?= htmlspecialchars($product['subtitle']) ?></p>
            <div class="mt-4 space-y-3 text-muted">
                <?php foreach ($product['teaser'] as $paragraph) : ?>
                    <p><?= htmlspecialchars($paragraph) ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php else : ?>
    <p>Sorry, we couldn't find that product.</p>
<?php endif; ?>
