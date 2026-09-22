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
        'label' => t('nav.home'),
        'url' => '/',
        'icon' => 'fa-solid fa-house',
    ],
    [
        'label' => t('nav.about'),
        'url' => '/o-nas',
    ],
    [
        'label' => t('nav.contact'),
        'url' => '/kontakt',
    ],
    [
        'label' => t('nav.write_to_us'),
        'url' => '/pisite-nam',
    ],
    [
        'label' => t('nav.products'),
        'url' => '/',
        'class' => 'uppercase font-extrabold',
    ],
];
