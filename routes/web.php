<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');

Route::get('/posts', function () {  
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()]);
})->name('posts');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
})->name('post');

Route::get('/author/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
})->name('articlesBy');

Route::get('/category/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Articles in: ' . $category->category, 'posts' => $category->posts]);
})->name('categories');

Route::get('/about', function () {
    return view('about', ['name' => 'Fikri Akbar Pratama', 'title' => 'About']);
})->name('about');
 
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
