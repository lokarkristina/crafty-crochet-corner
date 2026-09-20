<?php $menuItems = require __DIR__ . '/../data/menu-main.php'; ?>

<header class="mt-4 py-4">
    <div class="container">
        <a href="/index.php" class="text-3xl font-bold">Crafty Crochet Corner</a>

        <nav class="
            mt-8 rounded-sm bg-linear-to-b from-accent-light to-accent-dark py-3
            text-accent-contrast shadow-[0_3px_6px_0] shadow-glow
        ">
            <ul class="flex flex-wrap divide-x divide-black/14 text-shadow-[0_1px_0] text-shadow-black/30">
                <?php foreach ($menuItems as $item) : ?>
                    <li>
                        <a
                            href="<?= htmlspecialchars($item['url']) ?>"
                            class="
                                inline-flex items-center px-6 py-1 font-bold
                                <?= htmlspecialchars($item['class'] ?? '') ?>
                            "
                        >
                            <?php if (!empty($item['icon'])) : ?>
                                <i
                                    class="
                                        <?= htmlspecialchars($item['icon']) ?>
                                        mr-2.5 text-accent-contrast/25 text-shadow-none
                                    "
                                    aria-hidden="true"
                                ></i>
                            <?php endif; ?>
                            <?= htmlspecialchars($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
