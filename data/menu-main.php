<?php

// Main navigation items, rendered in order by includes/header.php.
//
// Each item takes:
//   label - required, link text (escaped on output)
//   url   - required, link target
//   icon  - optional, Font Awesome classes for an <i> shown before the label (e.g. 'fa-solid fa-house')
//   class - optional, extra CSS classes added to the link
return [
    [
        'label' => 'Domov',
        'url' => '/',
        'icon' => 'fa-solid fa-house',
    ],
    [
        'label' => 'O nas',
        'url' => '/o-nas',
    ],
    [
        'label' => 'Kontakt',
        'url' => '/kontakt',
    ],
    [
        'label' => 'Pišite nam',
        'url' => '/pisite-nam',
    ],
    [
        'label' => 'Izdelki',
        'url' => '/',
        'class' => 'uppercase font-extrabold',
    ],
];
