<?php

/** @var Application $app */

$fixture = [];

$fixture['menu'] = [
    'class' => [
        'fields' => [
            ['name' => 'name', 'type' => 'string'],
            ['name' => 'link', 'type' => 'string'],
        ]
    ],
    'instances' => [
        [
            'name' => 'Main',
            'link' =>  '#home'
        ],
        [
            'name' => 'Products',
            'link' =>  '#products'
        ],
        [
            'name' => 'Image Gallery',
            'link' =>  '#image_gallery'
        ],
        [
            'name' => 'Video Gallery',
            'link' =>  '#video_gallery'
        ],
        [
            'name' => 'Feedback Form',
            'link' =>  '#feedback'
        ],
    ]
];

/**
 * Object Product
 */
$fixture['product'] = [
    'class' => [
        'fields' => [
            ['name' => 'title', 'type' => 'string'],
            ['name' => 'description', 'type' => 'text'],
            ['name' => 'price', 'type' => 'integer'],
            ['name' => 'image', 'type' => 'image'],
        ]
    ],
    'instances' => [
        [
            'title' => 'Patifon',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.',
            'price' => 1400,
            'image' => 'dummy/products/1.jpg'
        ],
        [
            'title' => 'Cash register',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.',
            'price' => 2100,
            'image' => 'dummy/products/2.jpg'
        ],
        [
            'title' => 'Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur dolores eligendi eos
                            eveniet, ipsam ipsum maiores officia perferendis, placeat quas, quisquam quo reprehenderit unde.',
            'price' => 1800,
            'image' => 'dummy/products/3.jpg'
        ],
    ]
];

/**
 * Object SingleImage
 */
$fixture['image_item'] = [
    'class' => [
        'fields' => [
            ['name' => 'name', 'type' => 'string'],
            ['name' => 'image', 'type' => 'image'],
        ]
    ],
    'instances' => [
        [
            'name' => 'Some image',
            'image' => 'dummy/single_image/1.jpg'
        ],
    ]
];

/**
 * Object ImageGallery
 */
$fixture['image_gallery'] = [
    'class' => [
        'fields' => [
            ['name' => 'name', 'type' => 'string'],
            ['name' => 'images', 'type' => 'image_collection'],
        ]
    ],
    'instances' => [
        [
            'name' => 'The Brits',
            'images' => ['dummy/cats/british/bagira.jpg', 'dummy/cats/british/katy.jpg', 'dummy/cats/british/love.jpg', 'dummy/cats/british/vasya.jpg']
        ],
        [
            'name' => 'The Bengals',
            'images' => ['dummy/cats/bengals/brothers.jpg', 'dummy/cats/bengals/children.jpg', 'dummy/cats/bengals/danger.jpg', 'dummy/cats/bengals/wild.jpg']
        ],
        [
            'name' => 'The Maine Coons',
            'images' => ['dummy/cats/maincoons/family.jpg', 'dummy/cats/maincoons/father.jpg', 'dummy/cats/maincoons/petya.jpg', 'dummy/cats/maincoons/snow-kat.jpg']
        ],
    ]
];

/**
 * Object SingleVideo
 */
$fixture['video_item'] = [
    'class' => [
        'fields' => [
            ['name' => 'name', 'type' => 'string'],
            ['name' => 'video', 'type' => 'video'],
        ]
    ],
    'instances' => [
        [
            'name' => 'GLAVWEB',
            'video' =>  'https://www.youtube.com/watch?v=8qrV6jS7V5o'
        ],
    ]
];

/**
 * Object VideoGallery
 */
$fixture['video_gallery'] = [
    'class' => [
        'fields' => [
            ['name' => 'name', 'type' => 'string'],
            ['name' => 'videos', 'type' => 'video_collection'],
        ]
    ],
    'instances' => [
        [
            'name' => 'Technologies of development',
            'videos' => ['https://www.youtube.com/watch?v=i2ivGNU6_Kg&list=PLAmtJdts5TocS0zpLQeaYMBIWuWpd__Nl', 'https://www.youtube.com/watch?v=TIDhOnsA8Eg', 'https://www.youtube.com/watch?v=2l0JgYSnHkE']
        ],
    ]
];

return $fixture;