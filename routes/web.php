<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');

Route::get('/posts', function () {  
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fikri Akbar Pratama',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, facere. Neque incidunt nisi esse expedita. Amet eveniet quia ipsum, earum nesciunt iure, labore ea mollitia atque quasi quidem? Explicabo at hic sunt pariatur nihil atque doloremque sint numquam ab voluptas aliquam dolores quae dolorum, illo corporis ipsum minus architecto iure?',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fikri Akbar Pratama',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id facere unde natus culpa. Maiores corporis inventore aspernatur neque vel, hic nostrum sapiente tempora incidunt iusto id corrupti laudantium itaque sit eligendi. Eum asperiores maxime nobis repudiandae, nesciunt voluptas quisquam placeat.'
        ]
    ]]);
})->name('posts');

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fikri Akbar Pratama',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, facere. Neque incidunt nisi esse expedita. Amet eveniet quia ipsum, earum nesciunt iure, labore ea mollitia atque quasi quidem? Explicabo at hic sunt pariatur nihil atque doloremque sint numquam ab voluptas aliquam dolores quae dolorum, illo corporis ipsum minus architecto iure?',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fikri Akbar Pratama',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id facere unde natus culpa. Maiores corporis inventore aspernatur neque vel, hic nostrum sapiente tempora incidunt iusto id corrupti laudantium itaque sit eligendi. Eum asperiores maxime nobis repudiandae, nesciunt voluptas quisquam placeat.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
})->name('post');

Route::get('/about', function () {
    return view('about', ['name' => 'Fikri Akbar Pratama', 'title' => 'About']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
