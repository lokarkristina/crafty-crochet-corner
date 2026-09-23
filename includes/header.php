<?php $menuItems = require __DIR__ . '/../data/menu-main.php'; ?>

<header class="mt-4 py-4">
    <div class="container">
        <?php // relative: the mobile panel below anchors to this row, not to .container, so it ?>
        <?php // lines up with the row's own (already-inset) width instead of spanning edge to edge. ?>
        <div class="relative flex items-center justify-between">
            <a href="/" class="inline-block">
                <img
                    src="/assets/images/logo-trimmed.png"
                    alt="Crafty Crochet Corner"
                    width="562"
                    height="281"
                    class="h-14 w-auto lg:h-20"
                >
            </a>

            <?php // Tablet/mobile menu toggle: a checkbox drives everything below, no JS needed. ?>
            <label
                for="nav-toggle"
                class="
                    relative grid size-10 cursor-pointer place-items-center rounded-sm text-2xl
                    text-ink transition-colors duration-(--duration-smooth) ease-smooth
                    hover:bg-black/5 has-focus-visible:ring-2 has-focus-visible:ring-accent lg:hidden
                "
            >
                <input
                    type="checkbox"
                    id="nav-toggle"
                    class="sr-only"
                    aria-controls="mobile-nav"
                    aria-label="<?= t('nav.open_menu') ?>"
                >
                <i class="fa-solid fa-bars nav-toggle-open [grid-area:1/1]" aria-hidden="true"></i>
                <i class="fa-solid fa-xmark nav-toggle-close [grid-area:1/1]" aria-hidden="true"></i>
            </label>

            <?php // Tablet/mobile menu: overlays the page (see input.css), opened by #nav-toggle. ?>
            <nav
                id="mobile-nav"
                aria-label="<?= t('nav.aria_label') ?>"
                class="
                    mt-4 flex-col divide-y divide-black/14 overflow-hidden rounded-sm
                    bg-linear-to-b from-accent-light to-accent-dark text-accent-contrast
                    text-shadow-[0_1px_0] text-shadow-black/30 shadow-[0_3px_6px_0] shadow-glow
                "
            >
                <?php foreach ($menuItems as $item) : ?>
                    <?php
                    $menuItemLinkClass = 'px-6 py-3';
                    $menuItemUnderline = false;
                    ?>
                    <?php include __DIR__ . '/menu-item.php'; ?>
                <?php endforeach; ?>
            </nav>
        </div>

        <?php // Desktop menu: one horizontal bar, unchanged from lg up. ?>
        <nav
            aria-label="<?= t('nav.aria_label') ?>"
            class="
                mt-8 hidden rounded-sm bg-linear-to-b from-accent-light to-accent-dark py-3
                text-accent-contrast shadow-[0_3px_6px_0] shadow-glow lg:block
            "
        >
            <ul class="flex flex-wrap divide-x divide-black/14 text-shadow-[0_1px_0] text-shadow-black/30">
                <?php foreach ($menuItems as $item) : ?>
                    <li>
                        <?php
                        $menuItemLinkClass = 'px-6 py-1';
                        $menuItemUnderline = true;
                        ?>
                        <?php include __DIR__ . '/menu-item.php'; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
