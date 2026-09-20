<?php

// Mock product database. Swap this out for a real DB query later
// without touching any of the pages that call it.
//
// Each product has:
//   id       - unique id, also the array key
//   image    - image URL
//   title    - product name
//   subtitle - short tagline shown under the title
//   teaser   - list of up to 4 paragraphs (plain text, escaped on output)
//   url      - link to the product's detail page ("more about product")
return [
    1 => [
        'id' => 1,
        'image' => 'https://placehold.co/400x400?text=Amigurumi+Bunny',
        'title' => 'Amigurumi Bunny',
        'subtitle' => 'A soft handmade plush friend',
        'teaser' => [
            'A soft, handmade crocheted bunny plush with embroidered face details.',
            'Each bunny is worked stitch by stitch in cuddly cotton yarn and stuffed with hypoallergenic filling.',
            'Perfect as a gift or nursery decoration.',
        ],
        'url' => '/izdelek/1',
    ],
    2 => [
        'id' => 2,
        'image' => 'https://placehold.co/400x400?text=Chunky+Throw+Blanket',
        'title' => 'Throw Blanket',
        'subtitle' => 'Oversized comfort for cold evenings',
        'teaser' => [
            'A cozy, oversized crocheted throw blanket made with chunky merino wool yarn.',
            'The thick stitches give it a generous weight and a beautiful texture '
                . 'that looks great draped over a sofa or bed.',
            'Machine washable, so it is as practical as it is pretty.',
        ],
        'url' => '/izdelek/2',
    ],
    3 => [
        'id' => 3,
        'image' => 'https://placehold.co/400x400?text=Granny+Square+Tote',
        'title' => 'Granny Square Tote Bag',
        'subtitle' => 'A classic pattern, made to carry',
        'teaser' => [
            'A colorful crocheted tote bag made of classic granny squares.',
            'Every square is joined by hand and the bag is lined with cotton fabric, so small items stay put.',
            'Sturdy handles make it ideal for the market, the beach or a day out.',
            'No two bags are exactly alike, as the colors are chosen square by square.',
        ],
        'url' => '/izdelek/3',
    ],
    4 => [
        'id' => 4,
        'image' => 'https://placehold.co/400x400?text=Flower+Coasters',
        'title' => 'Flower Coasters (Set of 4)',
        'subtitle' => 'Protect your table in style',
        'teaser' => [
            'A set of four handmade crocheted flower coasters, ideal for protecting tabletops in style.',
            'Made from durable cotton that soaks up drips and can be washed again and again.',
        ],
        'url' => '/izdelek/4',
    ],
    5 => [
        'id' => 5,
        'image' => 'https://placehold.co/400x400?text=Baby+Booties',
        'title' => 'Baby Booties',
        'subtitle' => 'Tiny toes, keep them cozy',
        'teaser' => [
            'Adorable crocheted baby booties made with soft, hypoallergenic yarn.',
            'The gentle stretch keeps them snug without pinching little feet.',
            'Available in newborn size.',
        ],
        'url' => '/izdelek/5',
    ],
];
