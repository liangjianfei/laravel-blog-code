<?php
return [
    'name' => "Aspire 学无止境",
    'title' => "梦想起航",
    'subtitle' => 'For you,a thousand times over',
    'description' => 'Aspire个人学习资源',
    'author' => '学院君',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
    ],
    'contact_email'=>env('MAIL_FROM'),
];