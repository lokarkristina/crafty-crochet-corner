<?php
/** @var array|null $page */
?>
<div class="mx-auto max-w-3xl">
    <?php if ($page) : ?>
        <h1 class="text-3xl"><?= htmlspecialchars($page['title']) ?></h1>
        <div class="mt-6 space-y-4">
            <?php foreach ($page['body'] as $paragraph) : ?>
                <p><?= htmlspecialchars($paragraph) ?></p>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p>Žal te strani nismo našli.</p>
    <?php endif; ?>
</div>
