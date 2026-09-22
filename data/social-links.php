<?php

// Social/contact links, rendered in order by includes/footer.php.
//
// Each item takes:
//   label     - required, accessible name for the icon-only link
//   url       - required, link target
//   icon      - required, Font Awesome classes for the <i> (e.g. 'fa-brands fa-github')
//   iconClass - optional, extra classes on the <i> itself (e.g. to correct its visual size:
//               not every glyph fills its box the same way, so icons can look mismatched
//               in height at the same font-size even though the font-size is identical)
//   class     - optional, extra CSS classes added to the link (e.g. a brand hover color)
return [
    [
        'label' => 'LinkedIn',
        'url' => 'https://www.linkedin.com/in/lokarkristina/',
        'icon' => 'fa-brands fa-linkedin',
        'class' => 'hover:text-[#0a66c2]',
    ],
    [
        'label' => 'GitHub',
        'url' => 'http://github.com/lokarkristina',
        'icon' => 'fa-brands fa-square-github',
        'class' => 'hover:text-[#181717]',
    ],
    [
        'label' => 'E-pošta',
        'url' => 'mailto:lokarkristina79@gmail.com',
        'icon' => 'fa-solid fa-at',
        'iconClass' => 'text-[0.9em]',
        'class' => 'hover:text-[#f43f5e]',
    ],
];
