<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');

Route::get('/posts', function () {  
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
})->name('posts');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
})->name('post');

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
})->name('articlesBy');

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => 'Articles in: ' . $category->category, 'posts' => $category->posts]);
})->name('categories');

Route::get('/about', function () {
    return view('about', ['name' => 'Fikri Akbar Pratama', 'title' => 'About']);
})->name('about');
 
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
