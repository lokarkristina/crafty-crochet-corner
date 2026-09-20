<?php
/** @var array $products */
?>
<h1 class="sr-only">Our Products</h1>
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <?php foreach ($products as $product) : ?>
        <?php include __DIR__ . '/../includes/product-card.php'; ?>
    <?php endforeach; ?>
</div>
