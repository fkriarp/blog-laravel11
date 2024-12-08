<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');

Route::get('/posts', function () {  
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
})->name('posts');

Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
})->name('post');

Route::get('/about', function () {
    return view('about', ['name' => 'Fikri Akbar Pratama', 'title' => 'About']);
})->name('about');
 
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
