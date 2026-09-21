<?php

// Main navigation items, rendered in order by includes/header.php.
// Pages that don't exist yet link to '#'.
//
// Each item takes:
//   label - required, link text (escaped on output)
//   url   - required, link target
//   icon  - optional, Font Awesome classes for an <i> shown before the label (e.g. 'fa-solid fa-house')
//   class - optional, extra CSS classes added to the link
return [
    [
        'label' => 'Domov',
        'url' => '/index.php',
        'icon' => 'fa-solid fa-house',
    ],
    [
        'label' => 'O nas',
        'url' => '#',
    ],
    [
        'label' => 'Kontakt',
        'url' => '#',
    ],
    [
        'label' => 'Pišite nam',
        'url' => '#',
    ],
    [
        'label' => 'Izdelki',
        'url' => '/index.php',
        'class' => 'uppercase font-extrabold',
    ],
];
