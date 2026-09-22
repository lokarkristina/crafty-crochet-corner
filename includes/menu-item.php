<?php

/** @var array $item */
/** @var string $menuItemLinkClass Extra classes for this rendering (spacing differs by breakpoint). */
/** @var bool $menuItemUnderline Whether hovering/focusing draws the underline (desktop only). */
$underlineClass = ($menuItemUnderline ?? true) ? 'menu-link ' : '';
?>
<a
    href="<?= htmlspecialchars($item['url']) ?>"
    class="
        <?= $underlineClass ?>inline-flex items-center gap-2 font-bold
        <?= $menuItemLinkClass ?> <?= htmlspecialchars($item['class'] ?? '') ?>
    "
>
    <?php if (!empty($item['icon'])) : ?>
        <i
            class="
                <?= htmlspecialchars($item['icon']) ?>
                text-accent-contrast/25 text-shadow-none
                [--menu-link-icon-hover:color-mix(in_srgb,white_60%,transparent)]
            "
            aria-hidden="true"
        ></i>
    <?php endif; ?>
    <?= htmlspecialchars($item['label']) ?>
</a>
