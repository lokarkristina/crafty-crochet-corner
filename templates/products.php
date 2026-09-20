<?php
/** @var array $products */
?>
<h1 class="mb-1 text-2xl font-bold">All Products</h1>
<p class="mb-4 text-muted">All our handmade crocheted products.</p>
<a href="/index.php" class="mb-4 inline-block hover:underline">&larr; Back to home</a>
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($products as $product) : ?>
        <?php include __DIR__ . '/../includes/product-card.php'; ?>
    <?php endforeach; ?>
</div>
