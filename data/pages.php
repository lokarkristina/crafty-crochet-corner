<?php

// Mock content for the simple text pages, keyed by the slug used in the URL (/o-nas, /kontakt, ...).
// Swap this out for a real source later without touching the page script or template.
//
// Each page has:
//   title - page heading, also used in the browser title
//   body  - list of paragraphs (plain text, escaped on output)
return [
    'o-nas' => [
        'title' => 'O nas',
        'body' => [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut '
                . 'labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco '
                . 'laboris nisi ut aliquip ex ea commodo consequat.',
            'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla '
                . 'pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia '
                . 'deserunt mollit anim id est laborum.',
            'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque '
                . 'laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi '
                . 'architecto beatae vitae dicta sunt explicabo.',
        ],
    ],
    'kontakt' => [
        'title' => 'Kontakt',
        'body' => [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. '
                . 'Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.',
            'Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. '
                . 'Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per '
                . 'conubia nostra.',
        ],
    ],
    'pisite-nam' => [
        'title' => 'Pišite nam',
        'body' => [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. '
                . 'Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam.',
            'In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula '
                . 'vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, '
                . 'massa.',
            'Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, '
                . 'tincidunt sed, euismod in, nibh.',
        ],
    ],
];
