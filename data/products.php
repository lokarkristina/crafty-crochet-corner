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
        // Photo: Chay Tessari / Unsplash
        'image' => 'https://images.unsplash.com/photo-1588016714217-5c5cd4a26d9e?w=800&h=800&fit=crop&q=75',
        'title' => 'Mini zajček',
        'subtitle' => 'Mehak ročno izdelan plišast prijatelj',
        'teaser' => [
            'Mehak, ročno kvačkan plišasti zajček z vezenimi detajli na obrazu.',
            'Vsak zajček je izdelan petljo za petljo iz mehke bombažne preje in napolnjen s hipoalergenskim polnilom.',
            'Popolno darilo ali dekoracija za otroško sobo.',
        ],
        'url' => '/izdelek/1',
    ],
    2 => [
        'id' => 2,
        // Photo: Bogdan Nesterenko / Unsplash
        'image' => 'https://images.unsplash.com/photo-1693387359607-f48d0a824b1e?w=800&h=800&fit=crop&q=75',
        'title' => 'Mehka odeja',
        'subtitle' => 'Velika udobnost za hladne večere',
        'teaser' => [
            'Prijetno, veliko kvačkano pregrinjalo iz debele merino volne.',
            'Debele petlje mu dajo prijetno težo in čudovito teksturo, '
                . 'zato je videti odlično prek kavča ali postelje.',
            'Pralno v pralnem stroju, zato je tako praktično kot lepo.',
        ],
        'url' => '/izdelek/2',
    ],
    3 => [
        'id' => 3,
        // Photo: Nicole Sara / Unsplash
        'image' => 'https://images.unsplash.com/photo-1789495966336-3ebfc4062e32?w=800&h=800&fit=crop&q=75',
        'title' => 'Granny square torba',
        'subtitle' => 'Klasičen vzorec, narejen za nošenje',
        'teaser' => [
            'Pisana kvačkana torba iz klasičnih babičinih kvadratkov.',
            'Vsak kvadratek je ročno spojen, torba pa je podložena z bombažno tkanino, '
                . 'da majhne stvari ostanejo na mestu.',
            'Močni ročaji so idealni za tržnico, plažo ali izlet.',
            'Nobeni dve torbi nista povsem enaki, saj barve izbiramo kvadratek za kvadratkom.',
        ],
        'url' => '/izdelek/3',
    ],
    4 => [
        'id' => 4,
        // Photo: Céline Druguet / Unsplash
        'image' => 'https://images.unsplash.com/photo-1648217736318-fbc4abc138ec?w=800&h=800&fit=crop&q=75',
        'title' => 'Podstavki s cvetovi (komplet)',
        'subtitle' => 'Zaščitite mizo s stilom',
        'teaser' => [
            'Komplet štirih ročno kvačkanih podstavkov s cvetovi, idealnih za elegantno zaščito miz.',
            'Izdelani so iz trpežnega bombaža, ki vpije kapljice in ga lahko perete znova in znova.',
        ],
        'url' => '/izdelek/4',
    ],
    5 => [
        'id' => 5,
        // Photo: Rakitha Perera / Unsplash
        'image' => 'https://images.unsplash.com/photo-1708661758229-fb1e73852b91?w=800&h=800&fit=crop&q=75',
        'title' => 'Copatki za dojenčke',
        'subtitle' => 'Majhni prstki naj bodo na toplem',
        'teaser' => [
            'Ljubki kvačkani copatki za dojenčke iz mehke hipoalergene preje.',
            'Nežna elastičnost poskrbi za tesen, a ne stiskajoč objem majhnih stopal.',
            'Na voljo v velikosti za novorojenčke.',
        ],
        'url' => '/izdelek/5',
    ],
];
